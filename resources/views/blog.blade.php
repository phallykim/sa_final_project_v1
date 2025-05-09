@extends('layouts.layout1')

@php
    $bodyClass = 'service-details';
    $title = 'Database Request Form';
    $subtitle = 'Database Request Form';
@endphp

@section('content')

<style>
    body {
        background-color: #ecf0f1;
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
    }

    .request-form {
        width: 50%;
        margin: 50px auto;
        padding: 30px;
        background-color: #ffffff;
        color: #2c3e50;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        opacity: 0;
        animation: fadeIn 0.5s forwards;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    .request-form h2 {
        text-align: center;
        color: #e74c3c;
        font-size: 26px;
        font-weight: 700;
        margin-bottom: 25px;
        animation: slideIn 0.5s ease-in-out;
    }

    @keyframes slideIn {
        from { transform: translateY(-30px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    .form-container {
        display: flex;
        gap: 20px;
        margin-top: 20px;
    }

    .left-section, .right-section {
        flex: 1;
    }

    .request-form label {
        font-weight: 600;
        display: block;
        margin-bottom: 8px;
        color: #34495e;
        font-size: 14px;
    }

    .request-form input, .request-form select, .request-form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #bdc3c7;
        border-radius: 6px;
        font-size: 14px;
        color: #2c3e50;
        transition: all 0.3s ease;
    }

    .request-form input:focus, .request-form select:focus, .request-form textarea:focus {
        border-color: rgb(103, 91, 234);
        outline: none;
        box-shadow: 0 0 8px rgba(52, 152, 219, 0.3);
        transform: translateY(-2px);
    }

    .request-form textarea {
        resize: vertical;
        min-height: 100px;
    }

    .request-form button {
        width: 100%;
        padding: 12px;
        background-color: #e74c3c;
        border: none;
        color: white;
        font-size: 16px;
        font-weight: 600;
        border-radius: 6px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.2s ease;
    }

    .request-form button:hover {
        background-color: #c0392b;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .request-form button:active {
        transform: translateY(1px);
        box-shadow: none;
    }

    .error-message {
        color: #e74c3c;
        text-align: center;
        margin-bottom: 15px;
        font-size: 14px;
        animation: shakeError 0.5s ease-in-out;
    }

    @keyframes shakeError {
        0% { transform: translateX(-10px); }
        25% { transform: translateX(10px); }
        50% { transform: translateX(-10px); }
        75% { transform: translateX(10px); }
        100% { transform: translateX(0); }
    }

    .form-group.invalid input,
    .form-group.invalid select,
    .form-group.invalid textarea {
        border-color: #e74c3c;
    }

    .form-group .error-text {
        color: #e74c3c;
        font-size: 12px;
        margin-top: 5px;
        display: none;
        animation: slideInError 0.3s ease-out;
    }

    @keyframes slideInError {
        from { transform: translateY(-10px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    .form-group.invalid .error-text {
        display: block;
    }

    .form-container .left-section .form-group,
    .form-container .right-section .form-group {
        transition: opacity 0.5s ease-in-out;
    }

    .form-group .fadeInField {
        animation: fadeInField 0.5s ease-in-out;
    }

    @keyframes fadeInField {
        from { opacity: 0; }
        to { opacity: 1; }
    }
</style>

<div id="app" class="request-form">
    <h2>Database Request Form</h2>
    <div v-if="showError" class="error-message">
        Please fill out all required fields!
    </div>
    <form @submit.prevent="submitForm">
        <div class="form-container">
            <div class="left-section">
                <div class="form-group" :class="{ 'invalid': !form.name && submitted }">
                    <label for="name">Requester Name</label>
                    <input type="text" id="name" v-model="form.name" placeholder="Enter your name" class="fadeInField">
                    <span class="error-text" v-if="!form.name && submitted">Name is required.</span>
                </div>
                <div class="form-group" :class="{ 'invalid': !form.department && submitted }">
                    <label for="department">Department</label>
                    <select id="department" v-model="form.department" class="fadeInField">
                        <option value="IT">IT</option>
                        <option value="HR">HR</option>
                        <option value="Finance">Finance</option>
                    </select>
                    <span class="error-text" v-if="!form.department && submitted">Department is required.</span>
                </div>
                <div class="form-group" :class="{ 'invalid': !form.requestType && submitted }">
                    <label for="request-type">Request Type</label>
                    <select id="request-type" v-model="form.requestType" class="fadeInField">
                        <option value="update">Database Update</option>
                        <option value="query">Data Query</option>
                        <option value="backup">Backup Request</option>
                        <option value="optimization">Performance Optimization</option>
                    </select>
                    <span class="error-text" v-if="!form.requestType && submitted">Request type is required.</span>
                </div>
            </div>
            <div class="right-section">
                <div class="form-group" :class="{ 'invalid': !form.priority && submitted }">
                    <label for="priority">Priority</label>
                    <select id="priority" v-model="form.priority" class="fadeInField">
                        <option value="high">High</option>
                        <option value="medium" selected>Medium</option>
                        <option value="low">Low</option>
                    </select>
                    <span class="error-text" v-if="!form.priority && submitted">Priority is required.</span>
                </div>
                <div class="form-group" :class="{ 'invalid': !form.description && submitted }">
                    <label for="description">Description</label>
                    <textarea id="description" v-model="form.description" placeholder="Enter detailed request description" class="fadeInField"></textarea>
                    <span class="error-text" v-if="!form.description && submitted">Description is required.</span>
                </div>
                <div class="form-group" :class="{ 'invalid': !form.email && submitted }">
                    <label for="email">Requester Email</label>
                    <input type="email" id="email" v-model="form.email" placeholder="Enter your email" class="fadeInField">
                    <span class="error-text" v-if="!form.email && submitted">Email is required.</span>
                </div>
            </div>
        </div>
        <button type="submit">Submit Request</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
<script>
    new Vue({
        el: '#app',
        data: {
            form: {
                priority: 'medium',
                description: '',
                email: '',
                name: '',
                department: 'IT',
                requestType: 'update'
            },
            showError: false,
            submitted: false
        },
        methods: {
            submitForm() {
                this.submitted = true;
                if (this.validateForm()) {
                    this.showError = false;
                    alert('Form submitted successfully!');
                    this.resetForm(); // Reset form data after submission
                } else {
                    this.showError = true;
                }
            },
            validateForm() {
                return Object.values(this.form).every(field => field.trim() !== '');
            },
            resetForm() {
                this.form = {
                    priority: 'medium',
                    description: '',
                    email: '',
                    name: '',
                    department: 'IT',
                    requestType: 'update'
                };
                this.submitted = false; // Reset validation state
            }
        }
    });
</script>
@endsection
