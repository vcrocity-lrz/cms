<template>
    <div class="flex min-h-screen items-center justify-center bg-gradient-to-br from-sky-900 to-blue-700 p-6">
      <div class="w-full max-w-sm bg-white p-8 rounded-2xl shadow-lg">
        <Toast />
        <h1 class="text-2xl font-bold text-center text-gray-800">Welcome to CMS</h1>
        <p class="text-center text-gray-500 mb-6">Log in to continue</p>
  
        <Form v-slot="$form" :initialValues="initialValues" :resolver="resolver" @submit="onFormSubmit" class="flex flex-col gap-4">
          <div class="flex flex-col gap-2">
            <label for="username" class="text-sm font-medium text-gray-700">Username</label>
            <InputText name="username" id="username" type="text" placeholder="Enter your username" class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300" />
            <Message v-if="$form.username?.invalid" severity="error" size="small" variant="simple">{{ $form.username.error.message }}</Message>
          </div>
          
          <div class="flex flex-col gap-2">
            <label for="password" class="text-sm font-medium text-gray-700">Password</label>
            <Password name="password" id="password" placeholder="Enter your password" :feedback="false" toggleMask  />
            <Message v-if="$form.password?.invalid" severity="error" size="small" variant="simple">
              <ul class="my-0 px-4 flex flex-col gap-1">
                <li v-for="(error, index) of $form.password.errors" :key="index">{{ error.message }}</li>
              </ul>
            </Message>
          </div>
          
          <Button type="submit" label="Login" class="bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition" />
        </Form>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  import { zodResolver } from '@primevue/forms/resolvers/zod';
  import { z } from 'zod';
  import { useToast } from 'primevue/usetoast';
  
  const toast = useToast();
  
  const initialValues = ref({
    username: '',
    password: ''
  });
  
  const resolver = zodResolver(
    z.object({
      username: z.string().min(1, { message: 'Username is required.' }),
      password: z
        .string()
        .min(3, { message: 'Minimum 3 characters.' })
        .max(8, { message: 'Maximum 8 characters.' })
        .refine((value) => /[a-z]/.test(value), { message: 'Must have a lowercase letter.' })
        .refine((value) => /[A-Z]/.test(value), { message: 'Must have an uppercase letter.' })
        .refine((value) => /\d/.test(value), { message: 'Must have a number.' })
    })
  );
  
  const onFormSubmit = (e) => {
    if (e.valid) {
      toast.add({ severity: 'success', summary: 'Login successful!', life: 3000 });
    }
  };
  </script>
  