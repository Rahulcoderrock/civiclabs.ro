@if (!session('cookieConsent'))
    <c-cookie-consent
        message="{{ __('content.cookies') }}"
        close="{{ __('content.cookiesClose') }}"
        agree-label="{{ __('content.cookiesAgree') }}"
        more-label="{{ __('content.cookiesMore') }}"
        more-url="{{ route('pages.show', ['page' => 'legal']) }}"
        action="{{ route('session.cookieConsent') }}"
        ></c-cookie-consent>
@endif
