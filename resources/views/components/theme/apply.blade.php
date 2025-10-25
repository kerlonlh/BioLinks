<div x-data="{
    theme: localStorage.getItem('theme') || 'system',

    init() {
        this.applyTheme();

        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
            if (this.theme === 'system') {
                this.applyTheme();
            }
        });
    },

    applyTheme() {
        if (this.theme === 'dark' || (this.theme === 'system' && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
        localStorage.setItem('theme', this.theme);
    },

    toggleTheme(newTheme) {
        this.theme = newTheme || (this.theme === 'light' ? 'dark' : 'light');
        this.applyTheme();
    }
}">
