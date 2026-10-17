@extends('Layouts.Adminlayouts')

@section('page-heading', 'Messages')

@section('content')

    <div class="messages-admin-page">

        {{-- HEADER --}}
        <div class="messages-admin-header">

            <div class="messages-admin-header-content">

                <h5>
                    <i class="bi bi-envelope-fill me-2"></i>
                    Contact Messages
                </h5>

                <p>
                    Manage messages received from your portfolio visitors.
                </p>

            </div>

        </div>


        {{-- SUCCESS MESSAGE --}}
        @if (session('success'))

            <div class="alert alert-success border-0 shadow-sm mb-4">

                <i class="bi bi-check-circle me-2"></i>

                {{ session('success') }}

            </div>

        @endif


        {{-- MESSAGES CARD --}}
        <div class="messages-admin-card">

            @if ($contacts->count() > 0)

                <div class="table-responsive">

                    <table class="messages-table">

                        <thead>

                            <tr>

                                <th>Visitor</th>

                                <th>Subject</th>

                                <th>Message</th>

                                <th>Status</th>

                                <th>Date</th>

                                <th>Actions</th>

                            </tr>

                        </thead>


                        <tbody>

                            @foreach ($contacts as $contact)

                                <tr class="{{ !$contact->is_read ? 'message-unread' : '' }}">

                                    {{-- VISITOR --}}
                                    <td>

                                        <div class="message-user-box">

                                            <div class="message-user-icon">

                                                {{ strtoupper(substr($contact->name, 0, 1)) }}

                                            </div>


                                            <div>

                                                <div class="message-user-name">

                                                    {{ $contact->name }}

                                                </div>

                                                <div class="message-user-email">

                                                    {{ $contact->email }}

                                                </div>

                                            </div>

                                        </div>

                                    </td>


                                    {{-- SUBJECT --}}
                                    <td>

                                        <div class="message-subject">

                                            {{ $contact->subject ?? 'No Subject' }}

                                        </div>

                                    </td>


                                    {{-- MESSAGE --}}
                                    <td>

                                        <div class="message-preview">

                                            {{ Str::limit($contact->message, 70) }}

                                        </div>

                                    </td>


                                    {{-- STATUS --}}
                                    <td>

                                        @if (!$contact->is_read)

                                            <span class="message-status unread">

                                                <i class="bi bi-envelope-fill"></i>

                                                Unread

                                            </span>

                                        @else

                                            <span class="message-status read">

                                                <i class="bi bi-envelope-open-fill"></i>

                                                Read

                                            </span>

                                        @endif

                                    </td>


                                    {{-- DATE --}}
                                    <td>

                                        <div class="message-date">

                                            {{ $contact->created_at->format('d M Y') }}

                                            <small>
                                                {{ $contact->created_at->format('h:i A') }}
                                            </small>

                                        </div>

                                    </td>


                                    {{-- ACTIONS --}}
                                    <td>

                                        <div class="message-actions">

                                            {{-- VIEW --}}
                                            <a href="{{ route('admin.contacts.show', $contact->id) }}"
                                                class="message-action-btn"
                                                title="View Message">

                                                <i class="bi bi-eye"></i>

                                            </a>


                                            {{-- MARK AS READ --}}
                                            @if (!$contact->is_read)

                                                <form action="{{ route('admin.contacts.read', $contact->id) }}"
                                                    method="POST"
                                                    class="d-inline">

                                                    @csrf
                                                    @method('PUT')

                                                    <button type="submit"
                                                        class="message-action-btn"
                                                        title="Mark as Read">

                                                        <i class="bi bi-envelope-open"></i>

                                                    </button>

                                                </form>

                                            @endif


                                            {{-- DELETE --}}
                                            <form action="{{ route('admin.contacts.destroy', $contact->id) }}"
                                                method="POST"
                                                class="d-inline">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                    class="message-action-btn message-delete-btn"
                                                    title="Delete">

                                                    <i class="bi bi-trash3"></i>

                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            @else

                {{-- EMPTY STATE --}}
                <div class="messages-empty">

                    <div class="messages-empty-icon">

                        <i class="bi bi-envelope-open"></i>

                    </div>

                    <h3>
                        No Messages Yet
                    </h3>

                    <p>
                        Messages submitted through your Contact Us form will appear here.
                    </p>

                </div>

            @endif

        </div>

    </div>

@endsection
