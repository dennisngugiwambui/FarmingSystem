@extends('Homepage.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- Main content area -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Latest News and Updates</h2>
                        <p class="card-text">Stay up-to-date with the latest news and updates concerning farm productions.</p>
                        <!-- News articles go here -->
                        <div class="row">
                            @foreach($newsArticles as $article)
                                <div class="col-md-6">
                                    <div class="card mb-4">
                                        <img src="{{$article->imageUrl}}" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$article->title}}</h5>
                                            <p class="card-text">{{$article->description}}</p>
                                            <p class="card-footer">Published at: {{$article->published}}</p>
                                            <a href="{{$article->read_more}}"  target="_blank" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                            <!-- Add more news articles as needed -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- Sidebar content -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Subscribe to Our Newsletter</h5>
                        <p class="card-text">Get the latest updates delivered straight to your inbox.</p>
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
