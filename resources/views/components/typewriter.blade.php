@props([
    'words' => [],
    'speed' => 100,
    'deleteSpeed' => 50,
    'pauseTime' => 2000,
    'loop' => true,
    'delay' => 0,
    'class' => '',
    'id' => 'typewriter-' . uniqid(),
])

@php
    // Convert words to array if it's a string
    if (is_string($words)) {
        $words = [$words];
    }
@endphp

<div {{ $attributes->merge(['class' => 'typewriter-container ' . $class]) }}>
    <span id="{{ $id }}" class="typewriter-text"></span><span class="cursor text-white/60 font-thin">|</span>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        class TypewriterEffect {
            constructor(element, options = {}) {
                this.element = element;
                this.words = options.words || [];
                this.speed = options.speed || 100;
                this.deleteSpeed = options.deleteSpeed || 50;
                this.pauseTime = options.pauseTime || 1000;
                this.loop = options.loop || false;
                this.currentWordIndex = 0;
                this.currentCharIndex = 0;
                this.isDeleting = false;
                this.isTyping = false;
            }

            // Helper function to strip HTML tags for character counting
            stripHtml(html) {
                const tmp = document.createElement('DIV');
                tmp.innerHTML = html;
                return tmp.textContent || tmp.innerText || '';
            }

            // Helper function to get HTML substring up to a certain character count
            getHtmlSubstring(html, charCount) {
                let plainText = this.stripHtml(html);
                if (charCount >= plainText.length) return html;
                if (charCount <= 0) return '';

                let result = '';
                let currentCharCount = 0;
                let insideTag = false;
                let tagBuffer = '';

                for (let i = 0; i < html.length; i++) {
                    if (html[i] === '<') {
                        insideTag = true;
                        tagBuffer += html[i];
                        continue;
                    }

                    if (insideTag) {
                        tagBuffer += html[i];
                        if (html[i] === '>') {
                            insideTag = false;
                            result += tagBuffer;
                            tagBuffer = '';
                        }
                        continue;
                    }

                    if (currentCharCount < charCount) {
                        result += html[i];
                        currentCharCount++;
                    } else {
                        break;
                    }
                }

                // Close any open tags
                const openTags = [];
                const tagMatches = result.match(/<[^>]+>/g) || [];
                tagMatches.forEach(tag => {
                    if (!tag.startsWith('</')) {
                        const tagName = tag.match(/<(\w+)/)?.[1];
                        if (tagName && !tag.includes('/>')) {
                            openTags.push(tagName);
                        }
                    } else {
                        const tagName = tag.match(/<\/(\w+)/)?.[1];
                        if (tagName) {
                            openTags.pop();
                        }
                    }
                });

                // Append closing tags for any unclosed tags
                while (openTags.length > 0) {
                    result += `</${openTags.pop()}>`;
                }

                return result;
            }

            type() {
                if (this.words.length === 0) return;

                const currentWord = this.words[this.currentWordIndex];
                const plainText = this.stripHtml(currentWord);

                if (this.isDeleting) {
                    this.currentCharIndex--;
                    this.element.innerHTML = this.getHtmlSubstring(currentWord, this.currentCharIndex);
                } else {
                    this.currentCharIndex++;
                    this.element.innerHTML = this.getHtmlSubstring(currentWord, this.currentCharIndex);
                }

                let speed = this.isDeleting ? this.deleteSpeed : this.speed;

                if (!this.isDeleting && this.currentCharIndex === plainText.length) {
                    speed = this.pauseTime;
                    this.isDeleting = true;
                } else if (this.isDeleting && this.currentCharIndex === 0) {
                    this.isDeleting = false;
                    this.currentWordIndex++;

                    if (this.currentWordIndex >= this.words.length) {
                        if (this.loop) {
                            this.currentWordIndex = 0;
                        } else {
                            this.isTyping = false;
                            return;
                        }
                    }
                }

                if (this.isTyping) {
                    setTimeout(() => this.type(), speed);
                }
            }

            start() {
                this.isTyping = true;
                this.type();
            }

            stop() {
                this.isTyping = false;
            }

            reset() {
                this.stop();
                this.currentWordIndex = 0;
                this.currentCharIndex = 0;
                this.isDeleting = false;
                this.element.innerHTML = '';
            }
        }

        const element = document.getElementById('{{ $id }}');
        if (element) {
            const typewriter = new TypewriterEffect(element, {
                words: @json($words),
                speed: {{ $speed }},
                deleteSpeed: {{ $deleteSpeed }},
                pauseTime: {{ $pauseTime }},
                loop: {{ $loop ? 'true' : 'false' }}
            });

            setTimeout(() => {
                typewriter.start();
            }, {{ $delay }});
        }
    });
</script>