@extends('Layouts.Adminlayouts')

@section('page-heading', 'Message Details')

@section('content')

    <div class="message-details-page">

        {{-- HEADER --}}
        <div class="message-details-header">

            <div>
                <h5>
                    <i class="bi bi-envelope-paper-fill me-2"></i>
                    Message Details
                </h5>

                <p>
                    View the complete message received from your portfolio visitor.
                </p>
            </div>

            <a href="{{ route('admin.contacts.index') }}" class="message-back-btn">
                <i class="bi bi-arrow-left"></i>
                Back to Messages
            </a>

        </div>


        {{-- MESSAGE CARD --}}
        <div class="message-details-card">

            {{-- VISITOR INFO --}}
            <div class="message-details-top">

                <div class="message-details-user">

                    <div class="message-details-avatar">
                        {{ strtoupper(substr($contact->name, 0, 1)) }}
                    </div>

                    <div>
                        <h4>
                            {{ $contact->name }}
                        </h4>

                        <a href="mailto:{{ $contact->email }}">
                            {{ $contact->email }}
                        </a>
                    </div>

                </div>


                <div class="message-details-date">

                    <span>
                        <i class="bi bi-calendar3 me-1"></i>
                        {{ $contact->created_at->format('d M Y') }}
                    </span>

                    <small>
                        {{ $contact->created_at->format('h:i A') }}
                    </small>

                </div>

            </div>


            {{-- STATUS --}}
            <div class="message-details-status">

                @if ($contact->is_read)
                    <span class="message-status read">
                        <i class="bi bi-envelope-open-fill"></i>
                        Read
                    </span>
                @else
                    <span class="message-status unread">
                        <i class="bi bi-envelope-fill"></i>
                        Unread
                    </span>
                @endif

            </div>


            {{-- SUBJECT --}}
            <div class="message-details-section">

                <label>
                    Subject
                </label>

                <div class="message-details-subject">
                    {{ $contact->subject ?? 'No Subject' }}
                </div>

            </div>


            {{-- FULL MESSAGE --}}
            <div class="message-details-section">

                <label>
                    Message
                </label>

                <div class="message-full-text">
                    {!! nl2br(e($contact->message)) !!}
                </div>

            </div>


            {{-- ACTIONS --}}
            <div class="message-details-actions">

                <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{ urlencode($contact->email) }}&su={{ urlencode('Re: ' . ($contact->subject ?? 'Your Message')) }}"
                    target="_blank" class="message-reply-btn">

                    <i class="bi bi-reply-fill"></i>
                    Reply via Email

                </a>


                @if (!$contact->is_read)
                    <form action="{{ route('admin.contacts.read', $contact->id) }}" method="POST">

                        @csrf
                        @method('PUT')

                        <button type="submit" class="message-mark-read-btn">

                            <i class="bi bi-envelope-open"></i>
                            Mark as Read

                        </button>

                    </form>
                @endif


                <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST">

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="message-delete-full-btn">

                        <i class="bi bi-trash3"></i>
                        Delete Message

                    </button>

                </form>

            </div>

        </div>

    </div>

@endsection
