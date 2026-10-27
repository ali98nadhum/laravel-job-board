<x-layout title="Blog">
  <main class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">
    <div class="mb-8">
      <h1 class="text-3xl font-bold tracking-tight text-slate-900">My Blog</h1>
      <p class="mt-2 text-slate-600">Latest posts and updates.</p>
    </div>

    @if ($posts->isEmpty())
      <div class="rounded-2xl border border-dashed border-slate-300 bg-white p-12 text-center text-slate-500">
        No posts yet.
      </div>
    @else
      <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($posts as $post)
          <article class="flex flex-col rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200 transition hover:shadow-lg hover:ring-indigo-300">
            <div class="mb-3 flex items-center justify-between">
              @if ($post->published)
                <span class="rounded-full bg-emerald-100 px-2.5 py-0.5 text-xs font-semibold text-emerald-700">Published</span>
              @else
                <span class="rounded-full bg-amber-100 px-2.5 py-0.5 text-xs font-semibold text-amber-700">Draft</span>
              @endif
              <time class="text-xs text-slate-400" datetime="{{ $post->created_at }}">
                {{ $post->created_at?->format('M d, Y') }}
              </time>
            </div>

            <h2 class="text-xl font-semibold text-slate-900">
              <a href="/blog/{{ $post->id }}" class="hover:text-indigo-600">{{ $post->title }}</a>
            </h2>
            <p class="mt-2 grow text-slate-600">{{ $post->body }}</p>

            <div class="mt-5 flex items-center gap-3 border-t border-slate-100 pt-4">
              <span class="flex size-9 items-center justify-center rounded-full bg-indigo-100 text-sm font-bold text-indigo-700">
                {{ strtoupper(substr($post->author, 0, 1)) }}
              </span>
              <span class="text-sm font-medium text-slate-700">{{ $post->author }}</span>
            </div>
          </article>
        @endforeach
      </div>
    @endif
  </main>
</x-layout>
