{% include header.html %}
<!-- Main -->
	<section class="wrapper style1">
		<div class="container">

			<!-- Blog -->
				<section>
					<header class="major">
						<h2>{{ page.title }}</h2>
						<p>Posted {{ page.date | date_to_string }}</p>
					</header>
					<div class="row">
						<div class="8u -2u">
							<section class="box">
								<a href="#" class="image left"><img src="{{ $page->getUrl() }}{{ page.featured }}" alt="" /></a>
								{{ page.content }}
							</section>
						</div>
					</div>
				</section>

		</div>
	</section>
{% include footer.html %}