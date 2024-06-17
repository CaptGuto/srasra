<x-baseLayout> 
    {{--TODO:Adjust styling--}}
    {{--TODO:Have this page/functionality only be accessed by signed-in users--}}
    <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Create a Gig</h2>
            <p class="mb-4">Post a gig to find a developer</p>
        </header>
    
        <form method="POST" action="/" class="text-center">
            @csrf
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">Company Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full mx-auto" name="company" />
                
                @error('company')
                    <p class="text-danger small mt-1">{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Job Title</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full mx-auto" name="title" placeholder="Example: Senior Laravel Developer" />
                
                @error('jobTitle')
                    <p class="text-danger small mt-1">{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Job Location</label> <br>
                <input type="text" class="border border-gray-200 rounded p-2 w-full mx-auto" name="location" placeholder="Example: Remote, Boston MA, etc" />
                
                @error('jobLocation')
                    <p class="text-danger small mt-1">{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Contact Email</label> <br>
                <input type="text" class="border border-gray-200 rounded p-2 w-full mx-auto" name="email" />
                
                @error('email')
                    <p class="text-danger danger mt-1">{{$message}}</p>
                @enderror
            </div>
    
            {{--
            <div class="mb-6">
                <label for="website" class="inline-block text-lg mb-2">Website/Application URL</label> <br>
                <input type="text" class="border border-gray-200 rounded p-2 w-full mx-auto" name="website" />
                
                @error('website')
                    <p class="text-danger small mt-1">{{$message}}</p>
                @enderror
            </div>
            --}}
    
            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">Tags (Comma Separated)</label> <br>
                <input type="text" class="border border-gray-200 rounded p-2 w-full mx-auto" name="tags" placeholder="Example: Laravel, Backend, Postgres, etc" />
                
                @error('tags')
                    <p class="text-danger small mt-1">{{$message}}</p>
                @enderror
            </div>
            
            {{--
            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">Company Logo</label> <br>
                <input type="file" class="border border-gray-200 rounded p-2 w-full mx-auto" name="logo" />
            </div>
            --}}
    
            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">Job Description</label> <br>
                <textarea class="border border-gray-200 rounded p-2 w-full mx-auto" name="description" rows="10" placeholder="Include tasks, requirements, salary, etc"></textarea>
                
                @error('jobDescription')
                    <p class="text-danger small mt-1">{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">Create Gig</button>
                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </div>
    </x-baseLayout> 