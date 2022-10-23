<div class="cd-user-modal">
    <!-- this is the entire modal form, including the background -->
    <div class="cd-user-modal-container" style="margin-top: 18%">
        <!-- this is the container wrapper -->
        <ul class="cd-switcher">
            <li><a href="#0">Sign in</a></li>
            <li><a href="#0">New account</a></li>
        </ul>

        <div id="cd-login">
            <!-- log in form -->
            <form method="POST" class="cd-form" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <p class="fieldset">
                        <label class="image-replace cd-username" for="signup-username">Username</label>
                        <x-text-input id="email" placeholder="Email"
                                      class="block mt-1 w-full full-width has-padding has-border" type="email"
                                      name="email" :value="old('email')" required autofocus/>

                        <x-input-error :messages="$errors->get('email')" class="mt-2 cd-error-message"/>
                    </p>
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <p class="fieldset">

                        <label class="image-replace cd-password" for="signup-password">Password</label>

                        <x-text-input id="password" class="block mt-1 w-full"
                                      type="password"
                                      name="password"
                                      required autocomplete="current-password"
                                      class="block mt-1 w-full full-width has-padding has-border"
                                      placeholder="Password"/>
                        <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                    </p>

                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <p class="fieldset">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                   class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                   name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    <p></p>
                </div>

                <p class="fieldset">
                    <input class="full-width has-padding" type="submit" value="Login">
                </p>
            </form>

            <!-- <a href="#0" class="cd-close-form">Close</a> -->
        </div> <!-- cd-login -->

        <div id="cd-signup">
            <!-- sign up form -->
            <form class="cd-form">
                <p class="fieldset">
                    <label class="image-replace cd-username" for="signup-username">Username</label>
                    <input class="full-width has-padding has-border" id="signup-username" type="text"
                           placeholder="Username">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-email" for="signup-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="signup-email" type="email"
                           placeholder="E-mail">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signup-password">Password</label>
                    <input class="full-width has-padding has-border" id="signup-password" type="text"
                           placeholder="Password">
                    <a href="#0" class="hide-password">Hide</a>
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <input type="checkbox" id="accept-terms">
                    <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
                </p>

                <p class="fieldset">
                    <input class="full-width has-padding" type="submit" value="Create account">
                </p>
            </form>

            <!-- <a href="#0" class="cd-close-form">Close</a> -->
        </div> <!-- cd-signup -->

        <a href="#0" class="cd-close-form">Close</a>
    </div> <!-- cd-user-modal-container -->
</div> <!-- cd-user-modal -->
