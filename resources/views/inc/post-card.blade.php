<div class="mt-3">
    <div class="card">
        <div class="px-3 pt-4 pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                        src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                    <div>
                        <h5 class="card-title mb-0"><a href="#">
                            </a></h5>
                    </div>
                </div>
                <div class="d-flex flex-col gap-2">
                    @if (!($editing ?? false))
                        <div>
                            <a class="btn btn-primary btn-sm" href="{{ route('post.edit', $post->id) }}">Update</a>
                        </div>
                    @endif
                    <div>
                        <form action="{{ route('post.destroy', $post->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if ($editing ?? false)
                <h4>Post #{{ $post->id }}</h4>
                <div class="row mb-4">
                    <form action="{{ route("post.update", $post->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <textarea class="form-control" id="content" name="content" rows="3">{{ $post->content }}</textarea>
                            @error('content')
                                <span style="color:red">{{ $message }}</span>
                            @enderror
                            @if( session()->has('success') )
                                <span style="color:green">{{session()->get('success')}}</span>
                            @endif
                        </div>
                        <div class="">
                            <button class="btn btn-dark btn-sm" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            @else
                <p class="fs-6 fw-light text-muted">
                    {{ $post->content }}
                </p>
            @endif
            <div class="d-flex justify-content-between">
                <div>
                    <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1">
                        </span> {{ $post->likes }} </a>
                </div>
                <div>
                    <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                        {{ $post->created_at }}</span>
                </div>
            </div>
            <div>
                <div class="mb-3">
                    <textarea class="fs-6 form-control" rows="1"></textarea>
                </div>
                <div class="w-full d-flex align-items-center justify-content-between">
                    <button class="btn btn-primary btn-sm"> Post Comment </button>
                    <a href="{{ route('post.show', $post->id) }}">Preview</a>
                </div>

                <hr>
                <div class="d-flex align-items-start">
                    <img style="width:35px" class="me-2 avatar-sm rounded-circle"
                        src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Luigi"
                        alt="Luigi Avatar">
                    <div class="w-100">
                        <div class="d-flex justify-content-between">
                            <h6 class="">Luigi
                            </h6>
                            <small class="fs-6 fw-light text-muted"> 3 hour
                                ago</small>
                        </div>
                        <p class="fs-6 mt-3 fw-light">
                            and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and
                            Evil)
                            by
                            Cicero, written in 45 BC. This book is a treatise on the theory of ethics,
                            very
                            popular during the Renaissan
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>