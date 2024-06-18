<x-baseLayout>
    {{-- TODO: Adjust styling --}}
    {{-- TODO: Have this page/functionality only be accessed by signed-in users --}}
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="bg-light border border-secondary p-4 rounded-lg">
                    <header class="text-center mb-4">
                        <h2 class="text-uppercase">Create a Gig</h2>
                        <p>Post a gig to find a developer</p>
                    </header>

                    <form method="POST" action="/" class="needs-validation" novalidate>
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

                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary">Create Gig</button>
                            <a href="/" class="btn btn-secondary ml-2">Back</a>
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

    .bg-light {
        background-color: #fff;
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