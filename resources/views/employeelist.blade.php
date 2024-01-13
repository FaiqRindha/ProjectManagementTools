<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project Management Tools</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    @vite('resources/css/app.css')
    <style>
        /* Add your global styles here */

        @media screen and (max-width: 768px) {
            /* Adjust styles for smaller screens (e.g., tablets) */
            .flex {
                flex-direction: column;
            }

            /* Add more styles as needed */
        }

        @media screen and (max-width: 480px) {
            /* Adjust styles for even smaller screens (e.g., smartphones) */
            /* Add more styles as needed */
        }
    </style>
</head>
<body>
    <div style="background: linear-gradient(135deg, #ebebeb, #f6f6f6);">
        <div class="flex">
            <div class="bg-slate-900 shadow-2xl" style="height: 100vh; width: 16vw; background: linear-gradient(135deg, #011A42, #0F172A);">
                <div class="flex justify-center gap-4 shadow-xl" style="background: linear-gradient(to right, #6b1400, #ff0026c1); padding: 16px; height: 18vh; width: 16vw">
                    <div class="my-auto">
                        <img src="https://seeklogo.com/images/T/telkomsel-logo-4EC1FC20C9-seeklogo.com.png" alt="" style="height: 60px">
                    </div>
                    <div class="my-auto">
                        <h1 class="font-semibold" style="color: #ffffff; font-size: 20px;">Project</h1>
                        <h1 class="font-semibold" style="color: #ffffff; font-size: 20px;">Management</h1>
                        <h1 class="font-semibold" style="color: #ffffff; font-size: 20px;">Tools</h1>
                    </div>
                </div>
                <div class="text-center font-semibold mt-3 mx-3" style="color: #e0e0e0; line-height: 1.25;">
                    Household Ecosystem Partnership
                </div>
                <div class="text-center mb-3 mx-3 text-white" style="letter-spacing: 0.5px; margin-top: 0.75rem; font-size: 10px; font-weight: 500">
                    househ5ld@telkomsel.id
                </div>
                <div class="mx-auto shadow-2xl" style="height: 2px; width: 14vw; background-color: #e0e0e0"></div>
                <div class="flex gap-2 mt-3 ml-3 center">
                    <svg viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" style="height: 39px; margin-left: 1px"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20.25 9C20.25 8.58579 19.9142 8.25 19.5 8.25C19.0858 8.25 18.75 8.58579 18.75 9L20.25 9ZM11.5 18.25C11.0858 18.25 10.75 18.5858 10.75 19C10.75 19.4142 11.0858 19.75 11.5 19.75V18.25ZM18.75 9C18.75 9.41421 19.0858 9.75 19.5 9.75C19.9142 9.75 20.25 9.41421 20.25 9L18.75 9ZM11.5 4.25C11.0858 4.25 10.75 4.58579 10.75 5C10.75 5.41421 11.0858 5.75 11.5 5.75V4.25ZM19.5 9.75C19.9142 9.75 20.25 9.41421 20.25 9C20.25 8.58579 19.9142 8.25 19.5 8.25V9.75ZM11.5 8.25C11.0858 8.25 10.75 8.58579 10.75 9C10.75 9.41421 11.0858 9.75 11.5 9.75V8.25ZM6.25 12C6.25 11.5858 5.91421 11.25 5.5 11.25C5.08579 11.25 4.75 11.5858 4.75 12H6.25ZM11.5 19.75C11.9142 19.75 12.25 19.4142 12.25 19C12.25 18.5858 11.9142 18.25 11.5 18.25V19.75ZM4.75 12C4.75 12.4142 5.08579 12.75 5.5 12.75C5.91421 12.75 6.25 12.4142 6.25 12H4.75ZM11.5 5.75C11.9142 5.75 12.25 5.41421 12.25 5C12.25 4.58579 11.9142 4.25 11.5 4.25V5.75ZM5.5 11.25C5.08579 11.25 4.75 11.5858 4.75 12C4.75 12.4142 5.08579 12.75 5.5 12.75L5.5 11.25ZM11.5 12.75C11.9142 12.75 12.25 12.4142 12.25 12C12.25 11.5858 11.9142 11.25 11.5 11.25V12.75ZM12.25 12C12.25 11.5858 11.9142 11.25 11.5 11.25C11.0858 11.25 10.75 11.5858 10.75 12H12.25ZM10.75 19C10.75 19.4142 11.0858 19.75 11.5 19.75C11.9142 19.75 12.25 19.4142 12.25 19H10.75ZM10.75 12C10.75 12.4142 11.0858 12.75 11.5 12.75C11.9142 12.75 12.25 12.4142 12.25 12H10.75ZM12.25 9C12.25 8.58579 11.9142 8.25 11.5 8.25C11.0858 8.25 10.75 8.58579 10.75 9H12.25ZM12.25 5C12.25 4.58579 11.9142 4.25 11.5 4.25C11.0858 4.25 10.75 4.58579 10.75 5H12.25ZM10.75 9C10.75 9.41421 11.0858 9.75 11.5 9.75C11.9142 9.75 12.25 9.41421 12.25 9H10.75ZM18.75 9V15H20.25V9L18.75 9ZM18.75 15C18.75 16.7949 17.2949 18.25 15.5 18.25V19.75C18.1234 19.75 20.25 17.6234 20.25 15H18.75ZM15.5 18.25H11.5V19.75H15.5V18.25ZM20.25 9C20.25 6.37665 18.1234 4.25 15.5 4.25L15.5 5.75C17.2949 5.75 18.75 7.20507 18.75 9L20.25 9ZM15.5 4.25H11.5V5.75H15.5L15.5 4.25ZM19.5 8.25H11.5V9.75H19.5V8.25ZM4.75 12V15H6.25V12H4.75ZM4.75 15C4.75 17.6234 6.87665 19.75 9.5 19.75V18.25C7.70507 18.25 6.25 16.7949 6.25 15H4.75ZM9.5 19.75H11.5V18.25H9.5V19.75ZM6.25 12L6.25 9H4.75L4.75 12H6.25ZM6.25 9C6.25 7.20507 7.70507 5.75 9.5 5.75V4.25C6.87665 4.25 4.75 6.37665 4.75 9H6.25ZM9.5 5.75H11.5V4.25H9.5V5.75ZM5.5 12.75H11.5V11.25H5.5L5.5 12.75ZM10.75 12V19H12.25V12H10.75ZM12.25 12V9H10.75V12H12.25ZM10.75 5V9H12.25V5H10.75Z" fill="#ffffff"></path> </g></svg>
                    <div class="self-center font-semibold" style="font-size: 14px; color: #e0e0e0">
                        Dashboard
                    </div>
                </div>
                <div class="flex gap-2 ml-3 center" style="margin-top: 0.75rem">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="height: 32px; margin-left: 5px; margin-right: 3px"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3 13H8.5L10 15L12 9L14 13H17M6.2 19H17.8C18.9201 19 19.4802 19 19.908 18.782C20.2843 18.5903 20.5903 18.2843 20.782 17.908C21 17.4802 21 16.9201 21 15.8V8.2C21 7.0799 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V15.8C3 16.9201 3 17.4802 3.21799 17.908C3.40973 18.2843 3.71569 18.5903 4.09202 18.782C4.51984 19 5.07989 19 6.2 19Z" stroke="#e0e0e0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    <div class="self-center font-semibold" style="font-size: 14px; color: #e0e0e0">
                        Project Monitoring
                    </div>
                    <svg  class="self-center ml-auto mr-3" style="height: 30px; width: 30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 10L12 15L17 10" stroke="#e0e0e0" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                </div>
                <div class="flex gap-2 ml-3 center" style="margin-top: 0.75rem">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="height: 29px; margin-left: 6px; margin-right: 5px"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8 6.00067L21 6.00139M8 12.0007L21 12.0015M8 18.0007L21 18.0015M3.5 6H3.51M3.5 12H3.51M3.5 18H3.51M4 6C4 6.27614 3.77614 6.5 3.5 6.5C3.22386 6.5 3 6.27614 3 6C3 5.72386 3.22386 5.5 3.5 5.5C3.77614 5.5 4 5.72386 4 6ZM4 12C4 12.2761 3.77614 12.5 3.5 12.5C3.22386 12.5 3 12.2761 3 12C3 11.7239 3.22386 11.5 3.5 11.5C3.77614 11.5 4 11.7239 4 12ZM4 18C4 18.2761 3.77614 18.5 3.5 18.5C3.22386 18.5 3 18.2761 3 18C3 17.7239 3.22386 17.5 3.5 17.5C3.77614 17.5 4 17.7239 4 18Z" stroke="#e0e0e0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    <div class="self-center font-semibold" style="font-size: 14px; color: #e0e0e0">
                        Employee Data
                    </div>
                    <svg  class="self-center ml-auto mr-3" style="height: 30px; width: 30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 10L12 15L17 10" stroke="#e0e0e0" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                </div>
                <div class="flex gap-2 ml-3 center" style="margin-top: 0.75rem">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="height: 29px; margin-left: 6px; margin-right: 5px"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3 9H21M7 3V5M17 3V5M6 12H8M11 12H13M16 12H18M6 15H8M11 15H13M16 15H18M6 18H8M11 18H13M16 18H18M6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z" stroke="#e0e0e0" stroke-width="2" stroke-linecap="round"></path> </g></svg>
                    <div class="self-center font-semibold" style="font-size: 14px; color: #e0e0e0">
                        Calendar
                    </div>
                    <svg  class="self-center ml-auto mr-3" style="height: 30px; width: 30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 10L12 15L17 10" stroke="#e0e0e0" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                </div>
                <div class="flex gap-2 ml-3 center" style="margin-top: 0.75rem">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="height: 30px; margin-left: 8px; margin-right: 2px"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15 16.5V19C15 20.1046 14.1046 21 13 21H6C4.89543 21 4 20.1046 4 19V5C4 3.89543 4.89543 3 6 3H13C14.1046 3 15 3.89543 15 5V8.0625M11 12H21M21 12L18.5 9.5M21 12L18.5 14.5" stroke="#e0e0e0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    <div class="self-center font-semibold" style="font-size: 14px; color: #e0e0e0">
                        Logout
                    </div>
                </div>
                <!-- Menambahkan garis horizontal -->
            </div>
            <div class="" style="height: 100vh; width: 84vw; padding: 32px;">
                <div class="rounded-md shadow-2xl flex items-center" style="width: 80vw; height: 20vh; background-color: white; padding: 32px">
                    <div class="text-center mx-auto text-3xl font-semibold" style="width: 40%">
                        EMPLOYEE LIST
                    </div>
                    <div class="text-center mx-auto flex items-center" style="width: 30%">
                        <div class="w-full h-24 text-center flex mx-auto items-center">
                            <h1 class=>
                                Search
                            </h1>
                        </div>
                    </div>
                    <div class="text-center mx-auto" style="width: 30%">
                        EMPLOYEE LIST
                    </div>
                </div>
                <div class="rounded-md shadow-2xl" style="margin-top: 32px; width: 80vw; height: 67vh; background-color: white">

                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>