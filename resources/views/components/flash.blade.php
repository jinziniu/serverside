@if (session('success'))
    <div 
        x-data="{ show: true }" 
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        class="flash-message"
    >
        <p>{{ session('success') }}</p>
    </div>
@endif

<style>
    .flash-message {
        background-color: #31708f; /* A softer blue */
        color: white;
        padding: 0.75rem 1.25rem;
        border-radius: 0.375rem; /* Tailwind-like rounded corners */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Subtle shadow */
        position: fixed;
        bottom: 1rem;
        right: 1rem;
        z-index: 1050; /* Above most elements */
        transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
        opacity: 0;
        visibility: hidden;
        transform: translateY(1rem);
    }

    .flash-message p {
        margin: 0;
        font-size: 0.875rem; /* Similar to text-sm in Tailwind */
    }

    [x-show="show"] {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
</style>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('flashMessage', () => ({
            show: true,
            init() {
                setTimeout(() => {
                    this.show = false;
                }, 4000);
            }
        }));
    });
</script>
