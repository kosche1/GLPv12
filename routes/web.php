<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get("/", function () {
    return view("welcome");
})->name("home");



Route::middleware(["auth"])->group(function () {
    Route::get("/dashboard", function () {
        return view("dashboard");
    })->name("user.dashboard");
    });

    // Settings Routes
    Route::redirect("settings", "settings/profile");
    Route::prefix('settings')->name('settings.')->group(function () {
        Volt::route("profile", "settings.profile")->name("profile");
        Volt::route("password", "settings.password")->name("password");
        Volt::route("appearance", "settings.appearance")->name("appearance");
        Route::get('/general', function () {
            return view('settings.general');
        })->name('general');
    });

Route::middleware(["auth"])->group(function () {
    // Platform Routes
    Route::get("/admin/dashboard", function () {
        return view("admin.dashboard");
    })->name("admin.dashboard");

    Route::get("/student/dashboard", function () {
        return view("student.dashboard");
    })->name("student.dashboard");

    Route::get("/teacher/dashboard", function () {
        return view("teacher.dashboard");
    })->name("teacher.dashboard");

    // Learning Routes
    Route::get('/courses', function () {
        return view('courses.index');
    })->name('courses');

    Route::get('/courses/{course}', function () {
        return view('courses.show');
    })->name('courses.show');

    Route::get('/courses/create', function () {
        return view('courses.create');
    })->name('courses.create');

    Route::get('/courses/{course}/edit', function () {
        return view('courses.edit');
    })->name('courses.edit');

    Route::get("/assignments", function () {
        return view("assignments.index");
    })->name("assignments");

    Route::get("/schedule", function () {
        return view("schedule.index");
    })->name("schedule");

    // Communication Routes
    Route::get("/messages", function () {
        return view("messages.index");
    })->name("messages");

    Route::get("/notifications", function () {
        return view("notifications.index");
    })->name("notifications");

    Route::get("/forum", function () {
        return view("forum.index");
    })->name("forum");

    // Resources Routes
    Route::get("/materials", function () {
        return view("materials.index");
    })->name("materials");

    Route::get("/recordings", function () {
        return view("recordings.index");
    })->name("recordings");

    Route::get("/library", function () {
        return view("library.index");
    })->name("library");
    
    Route::get("/general", function () {
        return view("general.index");
    })->name("general");
});

require __DIR__ . "/auth.php";
