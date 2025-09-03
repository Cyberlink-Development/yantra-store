@php
    $excludeIds = $excludeIds ?? [];
    $depth = $depth ?? 0;
    $selectedId = $selectedId ?? null;
    $assignedCategories = $assignedCategories ?? [];
@endphp

<option value="{{ $category->id }}"
        {{ in_array($category->id, $excludeIds) ? 'disabled' : '' }}
        {{-- for single category (like Category Edit) --}}
        {{ $category->id == $selectedId ? 'selected' : '' }}
        {{-- for multiple categories (like Product Edit) --}}
        {{ in_array($category->id, $assignedCategories) ? 'selected' : '' }}>
    {{ str_repeat('-', $depth) }} {{ $category->name }}
</option>

@if($category->children && $category->children->isNotEmpty())
    @foreach($category->children as $child)
        @include('backend.pages.category.category_dropdown', [
            'category' => $child,
            'depth' => $depth + 1,
            'excludeIds' => $excludeIds,
            'selectedId' => $selectedId,
            'assignedCategories' => $assignedCategories,
        ])
    @endforeach
@endif
