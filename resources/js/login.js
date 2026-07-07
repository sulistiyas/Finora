import Alpine from 'alpinejs';

Alpine.data('loginPage', () => ({
    email: '',
    password: '',
    loading: false,

    demoAccounts: [
        {
            name: 'Super Admin',
            role: 'Super Admin',
            initial: 'SA',
            email: 'admin@example.com',
            password: 'password',
        },
        {
            name: 'Budi Santoso',
            role: 'User',
            initial: 'BS',
            email: 'budi@example.com',
            password: 'password',
        },
    ],

    loginAsDemo(account) {
        if (this.loading) {
            return;
        }

        this.email = account.email;
        this.password = account.password;
        this.loading = true;

        this.$nextTick(() => {
            this.$refs.form.submit();
        });
    },
}));

window.Alpine = Alpine;
Alpine.start();