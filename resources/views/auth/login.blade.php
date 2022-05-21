@extends('layouts.app')

@section('title-page')
Login
@endsection

@section('body')
ui-rounder npc-default pg-auth
@endsection

@section('content')
{{-- main @s --}}
<div class="nk-main ">
    {{-- wrap @s --}}
    <div class="nk-wrap nk-wrap-nosidebar">
        {{-- content @s --}}
        <div class="nk-content ">
            <div class="nk-split nk-split-page nk-split-md">
                <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                    <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                        <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em
                                class="icon ni ni-info"></em></a>
                    </div>
                    <div class="nk-block nk-block-middle nk-auth-body">
                        <div class="brand-logo pb-5">
                            <a href="html/index.html" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="{{ asset('lib/images/logo.png') }}"
                                    srcset="{{ asset('lib/images/logo2x.png') }} 2x" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg"
                                    src="{{ asset('lib/images/logo-dark.png') }}"
                                    srcset="{{ asset('lib/images/logo-dark2x.png') }} 2x" alt="logo-dark">
                            </a>
                        </div>
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">Sign-In</h5>
                                <div class="nk-block-des">
                                    <p>Access this website using your email and password.</p>
                                </div>
                            </div>
                        </div>{{-- .nk-block-head --}}
                        <form action="#" class="form-validate is-alter" autocomplete="off">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="email-address">Email or Username</label>
                                    <a class="link link-primary link-sm" tabindex="-1" href="#">Need Help?</a>
                                </div>
                                <div class="form-control-wrap">
                                    <input autocomplete="off" type="text" class="form-control form-control-lg" required
                                        id="email-address" placeholder="Enter your email address or username">
                                </div>
                            </div>{{-- .form-group --}}
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="password">Password</label>
                                    <a class="link link-primary link-sm" tabindex="-1"
                                        href="html/pages/auths/auth-reset.html">Forgot Password?</a>
                                </div>
                                <div class="form-control-wrap">
                                    <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg"
                                        data-target="password">
                                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                    </a>
                                    <input autocomplete="new-password" type="password"
                                        class="form-control form-control-lg" required id="password"
                                        placeholder="Enter your password">
                                </div>
                            </div>{{-- .form-group --}}
                            <div class="form-group">
                                <button class="btn btn-lg btn-primary btn-block">Sign in</button>
                            </div>
                        </form>{{-- form --}}
                        <div class="form-note-s2 pt-4"> Don't have a account? <a href="/register">Create an account</a>
                        </div>
                    </div>{{-- .nk-block --}}
                    @include('layouts.footer')
                </div>{{-- .nk-split-content --}}
                @include('layouts.slider')
            </div>{{-- .nk-split --}}
        </div>
        {{-- wrap @e --}}
    </div>
    {{-- content @e --}}
</div>
{{-- main @e --}}
@endsection
