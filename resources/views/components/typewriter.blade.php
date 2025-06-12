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

            type() {
                if (this.words.length === 0) return;

                const currentWord = this.words[this.currentWordIndex];

                if (this.isDeleting) {
                    this.element.textContent = currentWord.substring(0, this.currentCharIndex - 1);
                    this.currentCharIndex--;
                } else {
                    this.element.textContent = currentWord.substring(0, this.currentCharIndex + 1);
                    this.currentCharIndex++;
                }

                let speed = this.isDeleting ? this.deleteSpeed : this.speed;

                if (!this.isDeleting && this.currentCharIndex === currentWord.length) {
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
                this.element.textContent = '';
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
