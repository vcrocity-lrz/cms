<template>
    <nav class="navbar">
        <div class="navbar-container">
            <router-link to="/" class="link">Home</router-link>
            <router-link to="/about" class="link">About</router-link>
        </div>
    </nav>
    <main class="main-content">
        <router-view></router-view>
    </main>
</template>

<style scoped>
/* Global Styles */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4e5;
    color: #333;
}

/* Navbar Styles */
.navbar {
    background-color: #333;
    padding: 10px 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.navbar-container {
    display: flex;
    justify-content: center;
}

.link {
    color: white;
    text-decoration: none;
    font-size: 16px;
    font-weight: 500;
    padding: 10px 15px;
    transition: background-color 0.3s ease;
}

.link:hover {
    background-color: #555;
    border-radius: 4px;
}

/* Main Content Styles */
.main-content {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 40px;
}

/* Footer Styles */
.footer {
    text-align: center;
    padding: 15px;
    background-color: #333;
    color: white;
    font-size: 14px;
}

.footer p {
    margin: 0;
}
</style>
