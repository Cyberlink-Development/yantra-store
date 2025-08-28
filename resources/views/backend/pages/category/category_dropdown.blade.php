<option value="{{ $category->id }}" {{ !empty($parentId) && ($parentId == $category->id) ? 'selected' : '' }} {{ !empty($dataId) && ($dataId == $category->id) ? 'disabled' : ''  }} {{ $assignedCategories &&  in_array($category->id, $assignedCategories ?? []) ? 'selected' : '' }}>
    {{ str_repeat('-', $depth) }} {{ $category->name }}
</option>

@if ($category->subCategory && $category->subCategory->isNotEmpty())
    @foreach ($category->subCategory as $child)
        @include('backend.pages.category.category_dropdown', [
            'category' => $child,
            'depth' => $depth + 1,
            'assignedCategories' => $assignedCategories ?? []
        ])
    @endforeach
@endif
