<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo e($title ?? 'Page Title'); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body>
    
    <nav class="bg-white dark:bg-neutral-900 shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                
                <div class="flex items-center">
                    <a href="<?php echo e(route('properties.index')); ?>" class="flex items-center space-x-2">
                        <span class="text-2xl">🏠</span>
                        <span class="text-xl font-bold text-gray-900 dark:text-gray-200">Real Estate App</span>
                    </a>
                </div>

                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="<?php echo e(route('properties.index')); ?>"
                        class="text-gray-600 dark:text-gray-200 hover:text-gray-900 dark:hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium <?php echo e(request()->routeIs('properties.index') ? 'text-blue-600 ' : ''); ?>">
                        All Properties
                    </a>
                    <a href="<?php echo e(route('properties.index', ['listingType' => 'sale'])); ?>"
                        class="text-gray-600 dark:text-gray-200 hover:text-gray-900 dark:hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">
                        For Sale
                    </a>
                    <a href="<?php echo e(route('properties.index', ['listingType' => 'rent'])); ?>"
                        class="text-gray-600 dark:text-gray-200 hover:text-gray-900 dark:hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">
                        For Rent
                    </a>
                    <a href="<?php echo e(route('properties.index', ['featuredOnly' => true])); ?>"
                        class="text-gray-600 dark:text-gray-200 hover:text-gray-900 dark:hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">
                        Featured
                    </a>
                </div>

                
                <div class="md:hidden">
                    <button type="button" id="mobile-menu-button"
                        class="text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500 p-2 rounded-md">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        
        <div class="md:hidden" id="mobile-menu" style="display: none;">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white dark:bg-neutral-900 border-t border-gray-200">
                <a href="<?php echo e(route('properties.index')); ?>"
                    class="text-gray-600 hover:text-gray-900 dark:hover:text-gray-300 block px-3 py-2 rounded-md text-base font-medium <?php echo e(request()->routeIs('properties.index') ? 'text-blue-600 bg-blue-50' : ''); ?>">
                    All Properties
                </a>
                <a href="<?php echo e(route('properties.index', ['listingType' => 'sale'])); ?>"
                    class="text-gray-600 hover:text-gray-900 dark:hover:text-gray-300 block px-3 py-2 rounded-md text-base font-medium">
                    For Sale
                </a>
                <a href="<?php echo e(route('properties.index', ['listingType' => 'rent'])); ?>"
                    class="text-gray-600 hover:text-gray-900 dark:hover:text-gray-300 block px-3 py-2 rounded-md text-base font-medium">
                    For Rent
                </a>
                <a href="<?php echo e(route('properties.index', ['featuredOnly' => true])); ?>"
                    class="text-gray-600 hover:text-gray-900 dark:hover:text-gray-300 block px-3 py-2 rounded-md text-base font-medium">
                    Featured
                </a>
            </div>
        </div>
    </nav>
    <?php echo e($slot); ?>

    
    <footer class="bg-gray-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center space-x-2 mb-4">
                        <span class="text-2xl">🏠</span>
                        <span class="text-xl font-bold">Real Estate App</span>
                    </div>
                    <p class="text-gray-300 mb-4">
                        Your trusted partner in finding the perfect property in Tanzania.
                        We offer the best selection of houses, apartments, land, and commercial properties.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white">📘 Facebook</a>
                        <a href="#" class="text-gray-300 hover:text-white">📷 Instagram</a>
                        <a href="#" class="text-gray-300 hover:text-white">🐦 Twitter</a>
                    </div>
                </div>

                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="<?php echo e(route('properties.index')); ?>" class="hover:text-white">All Properties</a></li>
                        <li><a href="<?php echo e(route('properties.index', ['listingType' => 'sale'])); ?>"
                                class="hover:text-white">For Sale</a></li>
                        <li><a href="<?php echo e(route('properties.index', ['listingType' => 'rent'])); ?>"
                                class="hover:text-white">For Rent</a></li>
                        <li><a href="<?php echo e(route('properties.index', ['featuredOnly' => true])); ?>"
                                class="hover:text-white">Featured</a></li>
                    </ul>
                </div>

                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li>📍 Dar es Salaam, Tanzania</li>
                        <li>📞 +255 123 456 789</li>
                        <li>✉️ info@realestate.tz</li>
                        <li>🕐 Mon - Fri: 9AM - 6PM</li>
                    </ul>
                </div>
            </div>

            
            <div class="border-t border-gray-700 pt-8 mt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-400 text-sm">
                        © <?php echo e(date('Y')); ?> Real Estate App. All rights reserved.
                    </p>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a>
                        <a href="#" class="text-gray-400 hover:text-white text-sm">Terms of Service</a>
                        <a href="#" class="text-gray-400 hover:text-white text-sm">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html><?php /**PATH C:\Users\Ryzen\LARAVEL PROJECTS\villacruel-real-estate\resources\views/components/layouts/app.blade.php ENDPATH**/ ?>