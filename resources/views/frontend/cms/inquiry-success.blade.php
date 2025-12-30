@extends('frontend.include.master')

@section('content')
<!-- Success Section -->
<section style="background: #f2f2f2; min-height: 100vh; display: flex; align-items: center; justify-content: center; margin: 0;">
    <div style="max-width: 600px; width: 100%; background: #fff; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); padding: 2rem; text-align: center;">
        
        <!-- Success Icon -->
        <div style="margin-bottom: 1rem;">
            <div style="width: 60px; height: 60px; border-radius: 50%; background: #28a745; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                <span style="color: #fff; font-size: 2rem;">&#10003;</span>
            </div>
        </div>

        <!-- Title -->
        <h2 style="color: #28a745; margin-bottom: 0.5rem; font-size: 1.8rem; font-weight: bold;">Sent Successfully!</h2>

        <!-- Greeting -->
        <p style="font-size: 1.1rem; margin: 0;">
            Dear <b>{{ $name }}</b>,
        </p>

        <!-- Custom Message -->
        <p style="margin-top: 0.5rem; font-size: 1rem; color: #444;">
            {!! $message !!}
        </p>

        <hr style="margin: 1.5rem auto; border: 0; border-top: 1px solid #ddd; width: 60%;">

        <!-- Footer Info -->
        <p style="font-size: 0.95rem; color: #666; line-height: 1.4;">
            <b>Best Wishes</b><br>
            {{ $setting->title }} <br>
            {{ $setting->address }}
        </p>

        <!-- Return Home -->
        <div style="margin-top: 1.5rem;">
            <a href="{{ url('/') }}" style="background: #007bff; color: #fff; padding: 0.6rem 1.2rem; border-radius: 6px; text-decoration: none; font-size: 1rem;">
                Return to Home
            </a>
        </div>
    </div>
</section>
@endsection
