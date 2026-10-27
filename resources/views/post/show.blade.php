<x-layout title="{{ $post->title }}">
  <main class="mx-auto max-w-3xl px-4 py-10 sm:px-6 lg:px-8">
    <a href="/blog" class="mb-6 inline-flex items-center gap-1 text-sm font-medium text-indigo-600 hover:text-indigo-800">
      <span aria-hidden="true">&larr;</span> Back to blog
    </a>

    <article class="rounded-2xl bg-white p-8 shadow-sm ring-1 ring-slate-200">
      <div class="mb-4 flex items-center justify-between">
        @if ($post->published)
          <span class="rounded-full bg-emerald-100 px-2.5 py-0.5 text-xs font-semibold text-emerald-700">Published</span>
        @else
          <span class="rounded-full bg-amber-100 px-2.5 py-0.5 text-xs font-semibold text-amber-700">Draft</span>
        @endif
        <time class="text-sm text-slate-400" datetime="{{ $post->created_at }}">
          {{ $post->created_at?->format('M d, Y') }}
        </time>
      </div>

      <h1 class="text-3xl font-bold tracking-tight text-slate-900">{{ $post->title }}</h1>

      <div class="mt-4 flex items-center gap-3 border-b border-slate-100 pb-6">
        <span class="flex size-10 items-center justify-center rounded-full bg-indigo-100 font-bold text-indigo-700">
          {{ strtoupper(substr($post->author, 0, 1)) }}
        </span>
        <span class="text-sm font-medium text-slate-700">By {{ $post->author }}</span>
      </div>

      <div class="mt-6 text-lg leading-relaxed whitespace-pre-line text-slate-700">{{ $post->body }}</div>
    </article>
  </main>
</x-layout>
