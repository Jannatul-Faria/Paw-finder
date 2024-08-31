<?php

use App\Models\Page;
use App\Models\GeneralSetting;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\File;

if (!function_exists('success')) {

    function success(string $message = 'Success', $data = [], int $statusCode = JsonResponse::HTTP_ACCEPTED, bool $success = true): JsonResponse
    {
        return response()->json([
            'success' => $success,
            'message' => $message,
            'data' => $data,
        ], $statusCode);
    }
}

if (!function_exists('error')) {
    function error($message = 'Error', $data = [], $statusCode = JsonResponse::HTTP_NOT_FOUND, $error = true): JsonResponse
    {
        return response()->json([
            'error' => $error,
            'message' => $message,
            'data' => $data,
        ], $statusCode);
    }
}

if (!function_exists('makeDirectory')) {
    function makeDirectory($location): void
    {
        if (!File::isDirectory(public_path() . $location)) {
            File::makeDirectory(public_path() . $location, 0777, true, true);
        }
    }
}

if (!function_exists('saveImage')) {
    function saveImage($image, $location): string
    {
        makeDirectory($location);
        $imageName = random_int(10000000, 99999999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path() . $location, $imageName);

        return $location . $imageName;
    }
}

// Delete Image
if (!function_exists('deleteImage')) {
    function deleteImage($image): void
    {
        if (File::exists(public_path() . $image)) {
            File::delete(public_path() . $image);
        }
    }
}

//  Gender Function
if (!function_exists('getGender')) {
    function getGender(): array
    {
        return ['male', 'female', 'others'];
    }
}
function setting()
{
    return GeneralSetting::first();
}
function getPage(){
    return Page::all();
}