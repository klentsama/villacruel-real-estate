<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="min-h-screen bg-gray-50 dark:bg-gray-950">
        <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                <nav class="flex text-sm text-gray-500 dark:text-gray-400" aria-label="Breadcrumb">
                    <a href="<?php echo e(route('properties.index')); ?>"
                        class="hover:text-gray-700 dark:hover:text-gray-200">Properties</a>
                    <span class="mx-2">/</span>
                    <a href="<?php echo e(route('properties.index')); ?>?city=<?php echo e($property->city); ?>"
                        class="hover:text-gray-700 dark:hover:text-gray-200"><?php echo e($property->city); ?></a>
                    <span class="mx-2">/</span>
                    <span class="text-gray-900 dark:text-white"><?php echo e($property->title); ?></span>
                </nav>
            </div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="lg:grid lg:grid-cols-3 lg:gap-8">
                
                <div class="lg:col-span-2">
                    
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 mb-6">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2"><?php echo e($property->title); ?>

                                </h1>
                                <p class="text-lg text-gray-600 dark:text-gray-300">📍 <?php echo e($property->full_address); ?></p>
                            </div>
                            <div class="text-right">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->isFeatured()): ?>
                                    <span
                                        class="inline-block bg-yellow-500 text-white px-3 py-1 text-sm font-semibold rounded mb-2">FEATURED</span><br>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <span
                                    class="inline-block bg-<?php echo e($property->listing_type === 'sale' ? 'green' : 'blue'); ?>-500 text-white px-3 py-1 text-sm font-semibold rounded uppercase">
                                    <?php echo e($property->listing_type); ?>

                                </span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="text-3xl font-bold text-green-600"><?php echo e($property->formatted_price); ?></div>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->price_per_sqft): ?>
                                <div class="text-lg text-gray-500 dark:text-gray-400">TZS
                                    <?php echo e(number_format($property->price_per_sqft, 0)); ?> per
                                    sqft</div>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>
                    </div>

                    
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm overflow-hidden mb-6">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->images && count($property->images) > 0): ?>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-4">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $property->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="<?php echo e($index === 0 ? 'md:col-span-2' : ''); ?>">
                                        <img src="<?php echo e(Storage::url($image)); ?>" alt="Property image <?php echo e($index + 1); ?>"
                                            class="w-full <?php echo e($index === 0 ? ' h-96' : 'h-38'); ?> object-cover rounded-lg cursor-pointer hover:opacity-90 transition-opacity"
                                            onclick="openImageModal('<?php echo e(Storage::url($image)); ?>')">
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>
                        <?php else: ?>
                            
                            <div class="h-64 bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
                                <div class="text-center">
                                    <span class="text-6xl mb-2 block"><?php echo e($property->type_icon); ?></span>
                                    <p class="text-gray-500 dark:text-gray-300">No images available</p>
                                </div>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>

                    
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 mb-6">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Property Details</h2>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->bedrooms): ?>
                                
                                <div class="text-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                    <div class="text-2xl mb-1">🛏️</div>
                                    <div class="font-semibold text-gray-900 dark:text-white"><?php echo e($property->bedrooms); ?></div>
                                    <div class="text-sm text-gray-600 dark:text-gray-300">
                                        Bedroom<?php echo e($property->bedrooms > 1 ? 's' : ''); ?></div>
                                </div>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->bathrooms): ?>
                                
                                <div class="text-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                    <div class="text-2xl mb-1">🚿</div>
                                    <div class="font-semibold text-gray-900 dark:text-white"><?php echo e($property->bathrooms); ?>

                                    </div>
                                    <div class="text-sm text-gray-600 dark:text-gray-300">
                                        Bathroom<?php echo e($property->bathrooms > 1 ? 's' : ''); ?>

                                    </div>
                                </div>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->total_area): ?>
                                
                                <div class="text-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                    <div class="text-2xl mb-1">📐</div>
                                    <div class="font-semibold text-gray-900 dark:text-white">
                                        <?php echo e(number_format($property->total_area)); ?>

                                    </div>
                                    <div class="text-sm text-gray-600 dark:text-gray-300">Square Feet</div>
                                </div>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->built_year): ?>
                                
                                <div class="text-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                    <div class="text-2xl mb-1">📅</div>
                                    <div class="font-semibold text-gray-900 dark:text-white"><?php echo e($property->built_year); ?>

                                    </div>
                                    <div class="text-sm text-gray-600 dark:text-gray-300">Year Built</div>
                                </div>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-2">Property Information</h3>
                                <ul class="space-y-1 text-gray-600 dark:text-gray-300">
                                    <li><span class="font-medium">Type:</span> <?php echo e(ucfirst($property->type)); ?></li>
                                    <li><span class="font-medium">Status:</span>
                                        <span
                                            class="px-2 py-1 bg-<?php echo e($property->status_color); ?>-100 text-<?php echo e($property->status_color); ?>-800 dark:bg-<?php echo e($property->status_color); ?>-900 dark:text-<?php echo e($property->status_color); ?>-200 rounded text-xs font-medium">
                                            <?php echo e(ucfirst($property->status)); ?>

                                        </span>
                                    </li>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->furnished !== null): ?>
                                        <li><span class="font-medium">Furnished:</span>
                                            <?php echo e($property->furnished ? 'Yes' : 'No'); ?></li>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->parking): ?>
                                        <li><span class="font-medium">Parking:</span>
                                            <?php echo e($property->parking_spaces ? $property->parking_spaces . ' spaces' : 'Available'); ?>

                                        </li>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </ul>
                            </div>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->features && count($property->features) > 0): ?>
                                <div>
                                    <h3 class="font-semibold text-gray-900 dark:text-white mb-2">Features & Amenities</h3>
                                    <div class="flex flex-wrap gap-2">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $property->features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <span
                                                class="px-3 py-1 bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200 text-xs font-medium rounded-full">
                                                <?php echo e($feature); ?>

                                            </span>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </div>
                                </div>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>
                    </div>

                    
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 mb-6">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">About This Property</h2>
                        
                        <div class="prose max-w-none text-gray-700 dark:text-gray-300">
                            <?php echo nl2br(e($property->description)); ?>

                        </div>
                    </div>

                    
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->latitude && $property->longitude): ?>
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 mb-6">
                            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Location</h2>
                            
                            <div class="h-64 bg-gray-200 dark:bg-gray-700 rounded-lg flex items-center justify-center">
                                <div class="text-center">
                                    <div class="text-2xl mb-2">🗺️</div>
                                    <p class="text-gray-600 dark:text-gray-300">Interactive map would be here</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                                        Coordinates: <?php echo e($property->latitude); ?>, <?php echo e($property->longitude); ?>

                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>

                
                <div class="lg:col-span-1 mt-8 lg:mt-0">
                    
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 mb-6 top-4">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Interested in this property?
                        </h3>

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->contact_name || $property->contact_phone || $property->contact_email): ?>
                            
                            <div class="mb-6 p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Contact Information</h4>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->contact_name): ?>
                                    <p class="text-sm text-gray-600 dark:text-gray-300"><span class="font-medium">Name:</span>
                                        <?php echo e($property->contact_name); ?></p>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->contact_phone): ?>
                                    <p class="text-sm text-gray-600 dark:text-gray-300"><span class="font-medium">Phone:</span>
                                        <a href="tel:<?php echo e($property->contact_phone); ?>"
                                            class="text-blue-600 hover:underline dark:text-blue-400"><?php echo e($property->contact_phone); ?></a>
                                    </p>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->contact_email): ?>
                                    <p class="text-sm text-gray-600 dark:text-gray-300"><span class="font-medium">Email:</span>
                                        <a href="mailto:<?php echo e($property->contact_email); ?>"
                                            class="text-blue-600 hover:underline dark:text-blue-400"><?php echo e($property->contact_email); ?></a>
                                    </p>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('contact-form', ['property' => $property]);

$key = null;

$key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-815246377-0', null);

$__html = app('livewire')->mount($__name, $__params, $key);

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                    </div>

                    
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 mb-6">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Quick Actions</h3>
                        <div class="space-y-3">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->contact_phone): ?>
                                <a href="tel:<?php echo e($property->contact_phone); ?>"
                                    class="block w-full bg-green-600 text-white text-center py-2 px-4 rounded-md hover:bg-green-700 transition-colors duration-300">
                                    📞 Call Now
                                </a>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->contact_email): ?>
                                <a href="mailto:<?php echo e($property->contact_email); ?>?subject=Inquiry about <?php echo e($property->title); ?>"
                                    class="block w-full bg-blue-600 text-white text-center py-2 px-4 rounded-md hover:bg-blue-700 transition-colors duration-300">
                                    ✉️ Send Email
                                </a>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                            <button onclick="shareProperty()"
                                class="block w-full bg-gray-600 text-white text-center py-2 px-4 rounded-md hover:bg-gray-700 transition-colors duration-300">
                                📤 Share Property
                            </button>

                            
                            <a href="<?php echo e(route('properties.index')); ?>"
                                class="block w-full bg-gray-100 text-gray-700 dark:bg-gray-700 dark:text-gray-200 text-center py-2 px-4 rounded-md hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors duration-300">
                                ← Back to Listings
                            </a>
                        </div>
                    </div>

                    
                    <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4 text-sm">
                        <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Property Summary</h4>
                        <ul class="space-y-1 text-gray-600 dark:text-gray-300">
                            <li><span class="font-medium">Property ID:</span> #<?php echo e($property->id); ?></li>
                            <li><span class="font-medium">Listed:</span> <?php echo e($property->created_at->diffForHumans()); ?>

                            </li>
                            <li><span class="font-medium">Type:</span> <?php echo e(ucfirst($property->type)); ?></li>
                            <li><span class="font-medium">City:</span> <?php echo e($property->city); ?></li>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->total_area): ?>
                                <li><span class="font-medium">Area:</span> <?php echo e(number_format($property->total_area)); ?> sqft
                                </li>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 z-50 hidden items-center justify-center p-4">
        <div class="max-w-4xl max-h-full relative">
            <img id="modalImage" src="" alt="Property image" class="max-w-full max-h-full object-contain">
            <button onclick="closeImageModal()"
                class="absolute top-4 right-4 text-white bg-black bg-opacity-50 rounded-full p-2 hover:bg-opacity-75">
                ✕
            </button>
        </div>
    </div>
    <div id="toastNotification"
        class="fixed bottom-5 right-5 bg-gray-900 text-white px-4 py-3 rounded-lg shadow-xl transition-opacity duration-300 opacity-0 pointer-events-none z-50">
        <span id="toastMessage"></span>
    </div>
    <script>
        function openImageModal(imageSrc) {
            document.getElementById('modalImage').src = imageSrc;
            document.getElementById('imageModal').classList.remove('hidden');
            document.getElementById('imageModal').classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closeImageModal() {
            document.getElementById('imageModal').classList.add('hidden');
            document.getElementById('imageModal').classList.remove('flex');
            document.body.style.overflow = 'auto';
        }

        // Function to show the custom toast notification
        function showToast(message) {
            const toast = document.getElementById('toastNotification');
            const toastMessage = document.getElementById('toastMessage');

            // Set message and make toast visible
            toastMessage.textContent = message;
            // The user had broken class strings here, fixing them.
            toast.classList.remove('opacity-0', 'pointer-events-none');
            toast.classList.add('opacity-100');

            // Hide after 3 seconds
            setTimeout(() => {
                toast.classList.remove('opacity-100');
                toast.classList.add('opacity-0', 'pointer-events-none');
            }, 3000);

        }

        function shareProperty() {
            if (navigator.share) {
                navigator.share({
                    title: '<?php echo e($property->title); ?>',
                    text: '<?php echo e(Str::limit($property->description, 100)); ?>',
                    url: window.location.href,
                });
            } else {
                // Fallback: copy to clipboard
                // Using document.execCommand('copy') as navigator.clipboard may be restricted in some environments (like iframes)
                const tempInput = document.createElement('input');
                tempInput.value = window.location.href;
                document.body.appendChild(tempInput);
                tempInput.select();
                try {
                    document.execCommand('copy');
                    showToast('Property link copied to clipboard!');
                } catch (err) {
                    console.error('Failed to copy text: ', err);
                    showToast('Failed to copy link. Check console for details.');
                }
                document.body.removeChild(tempInput);
            }
        }

        // Close modal on escape key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                closeImageModal();
            }
        });

        // Close modal on outside click
        document.getElementById('imageModal').addEventListener('click', function (e) {
            if (e.target === this) {
                closeImageModal();
            }
        });
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $attributes = $__attributesOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__attributesOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $component = $__componentOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__componentOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?><?php /**PATH C:\Users\Ryzen\LARAVEL PROJECTS\villacruel-real-estate\resources\views/properties/show.blade.php ENDPATH**/ ?>