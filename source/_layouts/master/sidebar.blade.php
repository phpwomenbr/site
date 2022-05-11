<div id="sidebar">

	<!-- Sidebar -->
	{% for post in site.posts offset: 0 limit: 2 %}
		<section>
			<h3>{{ post.title }}</h3>
			{{ post.excerpt }}
			<footer>
				<a href="{{ $page->getUrl() }}{{ post.url }}" class="button">Continue Reading</a>
			</footer>
		</section>
	{% endfor %}
	
</div>