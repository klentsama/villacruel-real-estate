<div class="min-h-screen bg-gray-50 dark:bg-neutral-900">
    
    <div class="bg-white dark:bg-gray-800 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="text-center">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-gray-100">Find Your Dream Property</h1>
                <p class="mt-2 text-lg text-gray-600 dark:text-gray-300">Discover the best real estate opportunities.</p>
            </div>
        </div>
    </div>

    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 mb-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
                
                <div>
                    
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Search</label>
                    <input type="text" wire:model.live.debounce.500ms="search" placeholder="Search properties..."
                        
                        class="w-full text-gray-900 dark:text-gray-200 dark:bg-gray-700 p-2 rounded-md border border-gray-300 dark:border-gray-600 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                
                <div>
                    
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Property Type</label>
                    <select wire:model.live="type" 
                        
                        class="w-full text-gray-900 dark:text-gray-200 dark:bg-gray-700 p-2 rounded-md border border-gray-300 dark:border-gray-600 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        <option value="">All Types</option>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $propertyTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($key); ?>"><?php echo e($label); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </select>
                </div>

                
                <div>
                    
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Listing Type</label>
                    <select wire:model.live="listingType" 
                        
                        class="w-full text-gray-900 dark:text-gray-200 dark:bg-gray-700 p-2 rounded-md border border-gray-300 dark:border-gray-600 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        <option value="">For Sale & Rent</option>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $listingTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($key); ?>"><?php echo e($label); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </select>
                </div>

                
                <div>
                    
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">City</label>
                    <select wire:model.live="city" 
                        
                        class="w-full text-gray-900 dark:text-gray-200 dark:bg-gray-700 p-2 rounded-md border border-gray-300 dark:border-gray-600 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        <option value="">All Cities</option>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cityOption): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($cityOption); ?>"><?php echo e($cityOption); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </select>
                </div>
            </div>

            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                
                <div>
                    
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Min Price (USD)</label>
                    <input type="number" wire:model.live.debounce.500ms="minPrice" placeholder="Min price"
                        
                        class="w-full text-gray-900 dark:text-gray-200 dark:bg-gray-700 p-2 rounded-md border border-gray-300 dark:border-gray-600 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Max Price (USD)</label>
                    <input type="number" wire:model.live.debounce.500ms="maxPrice" placeholder="Max price"
                        
                        class="w-full text-gray-900 dark:text-gray-200 dark:bg-gray-700 p-2 rounded-md border border-gray-300 dark:border-gray-600 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                
                <div>
                    
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Min Bedrooms</label>
                    <select wire:model.live="minBedrooms" 
                        
                        class="w-full text-gray-900 dark:text-gray-200 dark:bg-gray-700 p-2 rounded-md border border-gray-300 dark:border-gray-600 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        <option value="">Any</option>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php for($i = 1; $i <= 6; $i++): ?>
                            <option value="<?php echo e($i); ?>"><?php echo e($i); ?>+ bedroom<?php echo e($i > 1 ? 's' : ''); ?></option>
                        <?php endfor; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </select>
                </div>

                
                <div class="flex items-end">
                    <label class="flex items-center">
                        
                        <input type="checkbox" wire:model.live="featuredOnly" class="rounded border-gray-300 dark:border-gray-600 dark:bg-gray-700 text-blue-600 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        
                        <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">Featured only</span>
                    </label>
                </div>
            </div>

            
            
            <div class="flex items-center justify-between mt-4 pt-4 border-t border-gray-200 dark:border-gray-700">
                <button wire:click="clearFilters" class="bg-gray-600 text-white px-6 py-1 rounded-md hover:bg-blue-700 transition-colors duration-300 font-medium">
                    Clear All Filters
                </button>
                
                <div class="flex items-center space-x-4">
                    
                    <div class="flex items-center space-x-2">
                        <button wire:click="setViewMode('grid')" 
                            
                            class="p-2 rounded-md <?php echo e($viewMode === 'grid' ? 'bg-blue-100 text-blue-600 dark:bg-blue-800 dark:text-blue-200' : 'text-gray-400 hover:text-gray-600 dark:text-gray-500 dark:hover:text-gray-300'); ?>">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                            </svg>
                        </button>
                        <button wire:click="setViewMode('list')"
                            
                            class="p-2 rounded-md <?php echo e($viewMode === 'list' ? 'bg-blue-100 text-blue-600 dark:bg-blue-800 dark:text-blue-200' : 'text-gray-400 hover:text-gray-600 dark:text-gray-500 dark:hover:text-gray-300'); ?>">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center space-x-4">
                
                <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100">
                    <?php echo e($properties->total()); ?> Properties Found
                </h2>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($search || $type || $listingType || $city || $minPrice || $maxPrice || $minBedrooms || $featuredOnly): ?>
                    
                    <span class="text-sm text-gray-500 dark:text-gray-400">with filters applied</span>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>

            
            <div class="flex items-center space-x-2">
                
                <span class="text-sm text-gray-700 dark:text-gray-300">Sort by:</span>
                <select wire:model.live="sortBy" 
                    
                    class="text-sm rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:text-gray-300">
                    <option value="created_at">Newest</option>
                    <option value="price">Price</option>
                    <option value="title">Name</option>
                    <option value="city">City</option>
                </select>
                
                <button wire:click="sortBy('<?php echo e($sortBy); ?>')" class="text-sm text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($sortDirection === 'asc'): ?>
                        ↑
                    <?php else: ?>
                        ↓
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </button>
            </div>
        </div>
    
        
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($properties->count() > 0): ?>
            <div class="<?php echo e($viewMode === 'grid' ? 'grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6' : 'space-y-6'); ?>">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($viewMode === 'grid'): ?>
                        
                        
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-lg dark:hover:shadow-neutral-700 transition-shadow duration-300">
                            <div class="relative">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->main_image): ?>
                                    <img src="<?php echo e($property->image_url); ?>" alt="<?php echo e($property->title); ?>" class="w-full h-48 object-cover">
                                <?php else: ?>
                                    
                                    <div class="w-full h-48 bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
                                        <span class="text-4xl"><?php echo e($property->type_icon); ?></span>
                                    </div>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->isFeatured()): ?>
                                    <div class="absolute top-2 left-2">
                                        <span class="bg-yellow-500 text-white px-2 py-1 text-xs font-semibold rounded">FEATURED</span>
                                    </div>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                
                                <div class="absolute top-2 right-2">
                                    <span class="bg-<?php echo e($property->listing_type === 'sale' ? 'green' : 'blue'); ?>-500 text-white px-2 py-1 text-xs font-semibold rounded uppercase">
                                        <?php echo e($property->listing_type); ?>

                                    </span>
                                </div>
                            </div>
                            
                            <div class="p-4">
                                
                                <h3 class="font-semibold text-lg text-gray-900 dark:text-gray-100 mb-2 line-clamp-2"><?php echo e($property->title); ?></h3>
                                
                                <p class="text-gray-600 dark:text-gray-400 text-sm mb-2">🔥 <?php echo e($property->full_address); ?></p>
                                
                                <div class="flex items-center justify-between mb-3">
                                    <span class="text-xl font-bold text-green-600"><?php echo e($property->formatted_price); ?></span>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->price_per_sqft): ?>
                                        
                                        <span class="text-xs text-gray-500 dark:text-gray-400">USD <?php echo e(number_format($property->price_per_sqft, 0)); ?>/sqft</span>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>
                                
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->bedrooms || $property->bathrooms || $property->total_area): ?>
                                    
                                    <div class="flex items-center space-x-3 text-sm text-gray-600 dark:text-gray-400 mb-3">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->bedrooms): ?>
                                            <span>🛏️ <?php echo e($property->bedrooms); ?></span>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->bathrooms): ?>
                                            <span>🚿 <?php echo e($property->bathrooms); ?></span>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->total_area): ?>
                                            <span>📐 <?php echo e(number_format($property->total_area)); ?> sqft</span>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </div>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                
                                <a href="<?php echo e(route('property.show', $property->slug)); ?>" 
                                    class="block w-full bg-blue-600 text-white text-center py-2 rounded-md hover:bg-blue-700 transition-colors duration-300">
                                    View Details
                                </a>
                            </div>
                        </div>
                    <?php else: ?>
                        
                        
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-lg dark:hover:shadow-neutral-700 transition-shadow duration-300">
                            <div class="md:flex">
                                <div class="md:w-1/3 relative">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->main_image): ?>
                                        <img src="<?php echo e($property->image_url); ?>" alt="<?php echo e($property->title); ?>" class="w-full h-48 md:h-full object-cover">
                                    <?php else: ?>
                                        
                                        <div class="w-full h-48 md:h-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
                                            <span class="text-4xl"><?php echo e($property->type_icon); ?></span>
                                        </div>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->isFeatured()): ?>
                                        <div class="absolute top-2 left-2">
                                            <span class="bg-yellow-500 text-white px-2 py-1 text-xs font-semibold rounded">FEATURED</span>
                                        </div>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>
                                
                                <div class="md:w-2/3 p-6">
                                    <div class="flex items-start justify-between mb-2">
                                        
                                        <h3 class="font-semibold text-xl text-gray-900 dark:text-gray-100 mb-1"><?php echo e($property->title); ?></h3>
                                        <span class="bg-<?php echo e($property->listing_type === 'sale' ? 'green' : 'blue'); ?>-500 text-white px-2 py-1 text-xs font-semibold rounded uppercase ml-2">
                                            <?php echo e($property->listing_type); ?>

                                        </span>
                                    </div>
                                    
                                    
                                    <p class="text-gray-600 dark:text-gray-400 mb-2">🔥 <?php echo e($property->full_address); ?></p>
                                    <p class="text-gray-700 dark:text-gray-300 text-sm mb-3 line-clamp-2"><?php echo e($property->description); ?></p>
                                    
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->bedrooms || $property->bathrooms || $property->total_area): ?>
                                        
                                        <div class="flex items-center space-x-4 text-sm text-gray-600 dark:text-gray-400 mb-3">
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->bedrooms): ?>
                                                <span>🛏️ <?php echo e($property->bedrooms); ?> bedrooms</span>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->bathrooms): ?>
                                                <span>🚿 <?php echo e($property->bathrooms); ?> bathrooms</span>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->total_area): ?>
                                                <span>📐 <?php echo e(number_format($property->total_area)); ?> sqft</span>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        </div>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <span class="text-2xl font-bold text-green-600"><?php echo e($property->formatted_price); ?></span>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($property->price_per_sqft): ?>
                                                
                                                <span class="text-sm text-gray-500 dark:text-gray-400 ml-2">USD <?php echo e(number_format($property->price_per_sqft, 0)); ?>/sqft</span>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        </div>
                                        
                                        <a href="<?php echo e(route('property.show', $property->slug)); ?>" 
                                            class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition-colors duration-300">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>

            
            <div class="mt-8">
                <?php echo e($properties->links()); ?>

            </div>
        <?php else: ?>
            
            <div class="text-center py-12">
                <div class="text-6xl mb-4">🏠</div>
                
                <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-2">No properties found</h3>
                <p class="text-gray-600 dark:text-gray-400 mb-4">Try adjusting your search criteria or clearing some filters.</p>
                <button wire:click="clearFilters" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition-colors duration-300">
                    Clear All Filters
                </button>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</div><?php /**PATH C:\Users\Ryzen\LARAVEL PROJECTS\villacruel-real-estate\resources\views/livewire/property-listing.blade.php ENDPATH**/ ?>