<x-baseLayout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="bg-white shadow-sm border border-light p-5 rounded-lg">
                    <header class="text-center mb-4">
                        <h2 class="text-uppercase text-primary">List a Job</h2>
                        <p class="text-muted">Post a job to find an employee</p>
                    </header>

                    <form method="POST" action="/" class="needs-validation" novalidate enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="company" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="company" name="company" required>
                            <div class="invalid-feedback">
                                Please provide a company name.
                            </div>
                            @error('company')
                            <div class="text-danger small mt-1">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">Job Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Example: Senior Laravel Developer" required>
                            <div class="invalid-feedback">
                                Please provide a job title.
                            </div>
                            @error('title')
                            <div class="text-danger small mt-1">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="location" class="form-label">Job Location</label>
                            <input type="text" class="form-control" id="location" name="location"
                                placeholder="Example: Remote, Boston MA, etc" required>
                            <div class="invalid-feedback">
                                Please provide a job location.
                            </div>
                            @error('location')
                            <div class="text-danger small mt-1">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Contact Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <div class="invalid-feedback">
                                Please provide a valid email address.
                            </div>
                            @error('email')
                            <div class="text-danger small mt-1">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tags" class="form-label">Tags (Comma Separated)</label>
                            <input type="text" class="form-control" id="tags" name="tags"
                                placeholder="Example: Laravel, Backend, Postgres, etc" required>
                            <div class="invalid-feedback">
                                Please provide at least one tag.
                            </div>
                            @error('tags')
                            <div class="text-danger small mt-1">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="logo" class="inline-block text-lg mb-2">
                                Company Logo
                            </label>
                            <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo"/>
                            @error('logo')
                            <div class="text-danger small mt-1">{{$message}}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="description" class="form-label">Job Description</label>
                            <textarea class="form-control" id="description" name="description" rows="5"
                                required></textarea>
                            <div class="invalid-feedback">
                                Please provide a job description.
                            </div>
                            @error('description')
                            <div class="text-danger small mt-1">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary px-5">List Job</button>
                            <a href="/" class="btn btn-secondary ml-2 px-5">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-baseLayout>

<style>
    /* Additional Custom Styling */
    body {
        background-color: #f8f9fa;
    }

    .bg-white {
        background-color: #fff;
    }

    .shadow-sm {
        box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075);
    }

    .border-light {
        border-color: #f1f1f1;
    }

    .rounded-lg {
        border-radius: 0.5rem;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0069d9;
        border-color: #0062cc;
    }

    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
        border-color: #545b62;
    }
</style>