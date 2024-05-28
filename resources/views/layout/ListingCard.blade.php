<!-- Job Listing Card -->
<div class="col-lg-6">
    <div class="card border-0 shadow-sm">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="images/acme.png" class="img-fluid rounded-start d-none d-md-block" alt="Acme Corp" />
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title">
                        <a href="{{route('see_job_description', $listed->id)}}"
                            class="text-dark">{{$listed['title']}}</a>
                    </h3>
                    <h5 class="card-subtitle mb-2 text-muted">Acme Corp</h5>
                    <div class="d-flex flex-wrap mb-3">
                        <span class="badge bg-dark text-white me-2 mb-2">Laravel</span>
                        <span class="badge bg-dark text-white me-2 mb-2">API</span>
                        <span class="badge bg-dark text-white me-2 mb-2">Backend</span>
                        <span class="badge bg-dark text-white me-2 mb-2">Vue</span>
                    </div>
                    <p class="card-text"><i class="fa-solid fa-location-dot"></i> {{$listed['location']}}</p>
                </div>
            </div>
        </div>
    </div>
</div>