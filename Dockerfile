FROM jekyll/jekyll:3.4.3

RUN gem install \
  jekyll \
  jekyll-menus

VOLUME .:/srv/jekyll
EXPOSE 4000 80

RUN jekyll -v