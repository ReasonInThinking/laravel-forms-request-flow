# Laravel Form Handling & CSRF Study

This is a simple Laravel project. It demonstrates the core flow between Routes, Controllers, and Blade views.

<img width="615" height="83" alt="form" src="https://github.com/user-attachments/assets/ce04a81c-2ece-4b10-9729-bb6afa35913c" />

--

## 🚀 What's inside?
- **Routes**: GET and POST routing setup.
- **Controllers**: Handling logic using the `PostController`.
- **Form Handling**: Capturing user input using the `Request` object.
- **Security**: Implementation of `@csrf` protection (Cross-Site Request Forgery).


## 📖 Key Concepts Learned
1. **The Request Cycle**: How data travels from a `<form>` to a Controller method.
2. **Dependency Injection**: Using `Request $request` to access input data.
3. **Security**: Why every POST form needs a `@csrf` token to be accepted by Laravel.
