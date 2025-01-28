<template>
    <h1>Hello World</h1>
    <p>
        <strong>Current route path:</strong>{{ $route.fullPath }}
    </p>
    <nav>
        <div>
            <router-link to="/" class="link">Home</router-link>
            <router-link to="/about" class="link">About</router-link>

        </div>
    </nav>
    <main>
        <router-view></router-view>
    </main>
</template>