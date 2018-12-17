@if($users->count())
    @foreach($users as $user)
        <div class="col-2 profile-box border p-1 rounded text-center bg-light mr-4 mt-3">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3QXrSb2RmeSZdYHQsZ_Gl8nTt1QQpJzU27iSIfN8EXWUNFQ0H8g"
                 class="w-100 mb-1">
            <h5 class="m-0"><a href="{{ route('user.view', $user->id) }}"><strong>{{ $user->email }}</strong></a></h5>
            <p class="mb-2">
                <small>Following: <span class="badge badge-primary" userid={{$user->id}}>{{ $user->followings()->get()->count() }}</span>
                </small>
                <small>Followers: <span class="badge badge-primary tl-follower">{{ $user->followers()->get()->count() }}</span>
                </small>
            </p>
            <button class="btn btn-info btn-sm action-follow" data-id="{{ $user->id }}"><strong>

                    @if(auth()->user()->isFollowing($user))
                        UnFollow
                    @else
                        Follow
                    @endif
                </strong></button>

        </div>
    @endforeach
@endif