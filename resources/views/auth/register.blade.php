@extends('layouts.generics')

            <div class="container-fluid mt-3">
                <div class="row justify-content-center">                             
                    <div class="row m-10 justify-content-center">
                        <div class="col-5 mt-5">
                            <div class="content-box-sign border p-5 border-dark rounded shadow" style="background-color:#f6f7ff">
                                <h1 class="fw-bold text-center" style="font-size:35px">Register</h1>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="pb-1">
                                        <label for="name" class="form-label text-secondary">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" required>
                                    </div>
                                    <div class="pb-1 pt-2">
                                        <label for="username" class="form-label text-secondary">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp" required>
                                    </div>
                                    <div class="pb-1 pt-2">
                                        <label for="email" class="form-label text-secondary">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="pb-1 pt-2">
                                        <label for="password" class="form-label text-secondary">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>
                                    <div class="pb-1 pt-2">
                                        <label for="password_confirmation" class="form-label text-secondary">Confirm Password</label>
                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary fw-medium w-100 mt-2 pb-2 pt-2">Register</button>
                                </form>
                                <div class="mt-1">
                                    Already have an account? <a href="{{ route('tampilkan.login') }}" style="color: #f75600;">Login here</a>
                                </div>
                            </div>
                        </div>

                        <!-- IMAGE -->
                        <div class="col-4">
                            <img src="/assets/img/UniShare-with-Text-2.png" class="img-fluid p-0" alt="s" style="transform:scale(0.8)">
                        </div>
                    </div>

                    <!-- JAVASCRIPT -->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
                    <script src="assets/js/"></script>  
                </div>
            </div>
        </section>
    </body>
</html>
