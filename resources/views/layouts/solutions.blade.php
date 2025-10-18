<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavigator" aria-labelledby="offcanvasNavigatorLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavigatorLabel">{{ __('fresns.solutions') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="row">
            <div class="col-sm-6 mb-3">
                <a class="btn btn-primary w-100" role="button" href="{{ fs_route(route('fresns.home')) }}">{{ __('fresns.home') }}</a>
            </div>
            <div class="col-sm-6 mb-3">
                <button class="btn btn-outline-dark w-100 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-translate"></i>
                    {{ $currentLocaleName }}
                </button>
                <ul class="dropdown-menu">
                    @foreach(config('app.locales') as $code => $name)
                        <li>
                            <a class="dropdown-item @if ($code == App::getLocale()) active @endif" href="{{ LaravelLocalization::getLocalizedURL($code) }}" hreflang="{{ str_replace('zh-h', 'zh-H', $code) }}">
                                {{ $name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="card mt-2">
            <div class="card-header">{{ __('fresns.solutions') }}</div>
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-chat-square-dots"></i> <a href="{{ fs_route(route('fresns.customer-community')) }}" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">{{ __('fresns.solution_community_text') }}</a></h5>
                <p class="card-text text-secondary">{{ __('fresns.solution_community_tagline') }}</p>
            </div>
        </div>
    </div>
</div>
