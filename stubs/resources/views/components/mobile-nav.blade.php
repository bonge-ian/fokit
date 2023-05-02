	<div
		id="mobile-menu"
		class="uk-dropbar uk-dropbar-top uk-background-primary"
		uk-drop="mode:click;animation: reveal-top;flip:false;animate-out:true;duration: 300;toggle:false;container: #main-nav;stretch: true"
	>
		<div class="uk-flex uk-flex-column">
			<div class="uk-margin-auto-bottom">
				<div class="uk-grid uk-child-width-1-1 uk-grid-stack" uk-grid>
					<div>
						<div class="uk-panel">
							<ul class="uk-nav uk-nav-default uk-nav-divider">
								<li>
									<a href="/">Home</a>
								</li>
                                <!-- Authentication Links -->
                                @guest
                                    <li class="{{ request()->routeIs('login') ? 'uk-active' : '' }}">
                                        <a href="{{ route('login') }}">
                                            <span uk-icon="sign-in"
                                                  class="uk-margin-small-right"></span>
                                            {{ __('Login') }}
                                        </a>
                                    </li>

                                    @if (Route::has('register'))
                                        <li class="{{ request()->routeIs('register') ? 'uk-active' : '' }}">
                                            <a href="{{ route('register') }}">
                                                <span uk-icon="user"
                                                      class="uk-margin-small-right"></span>
                                                {{ __('Register') }}
                                            </a>
                                        </li>
                                    @endif
                                @else
                                    <li class="uk-nav-header">
                                        Hi, {{ Auth::user()->name }}
                                    </li>

                                    <li class="uk-nav-divider"></li>

                                    <li>
                                        <a href="/user/profile">
                                            <span uk-icon="user"
                                                  class="uk-margin-small-right"></span>
                                            Profile
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <span uk-icon="sign-out"
                                                  class="uk-margin-small-right"></span>
                                            Logout
                                        </a>

                                        <form id="logout-form"
                                              action="{{ route('logout') }}"
                                              method="POST"
                                              uk-hidden>
                                            @csrf
                                        </form>
                                    </li>
                                @endguest
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
