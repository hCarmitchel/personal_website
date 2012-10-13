from django.conf.urls.defaults import patterns, include, url
from django.views.generic import ListView, DetailView
from blog.models import Post, ContactForm
from django.contrib.syndication.views import Feed
from django import forms


class BlogFeed(Feed):
	title = "MySite"
	description = "Some ramblings of mine"
	link = "/blog/feed/"

	def items(self):
		return Post.objects.all().order_by("-created")
	def item_title(self, item):
		return item.title
	def item_description(self, item):
		return item.body
	def item_link(self, item):
		return u"/blog/%d" % item.id

	
# Uncomment the next two lines to enable the admin:


urlpatterns = patterns('blog.views',
	url(r'^$', ListView.as_view(
							queryset=Post.objects.all().order_by("-created"),
							template_name="blog.html")),
	url(r'^posts.html$', ListView.as_view(
							queryset=Post.objects.all().order_by("-created"),
							template_name="posts.html")),
	url(r'^(?P<pk>\d+)$', DetailView.as_view(
							model=Post,
							queryset=Post.objects.all().order_by("-created"),
							template_name="post.html")),
	url(r'^archives/$', ListView.as_view(
							queryset=Post.objects.all().order_by("-created"),
							template_name="archives.html")),
	url(r'^tag/(?P<tag>\w+)$', 'tagpage'),
	url(r'^feed/$', BlogFeed()),
	url(r'^course-projects.html$', ListView.as_view(
							queryset=Post.objects.all().order_by("-created"),
							template_name="course-projects.html")),
	url(r'^work-projects.html$', ListView.as_view(
						queryset=Post.objects.all().order_by("-created"),
						template_name="work-projects.html")),
	url(r'^education.html$', ListView.as_view(
						queryset=Post.objects.all().order_by("-created"),
						template_name="education.html")),
	url(r'^resume.html$', ListView.as_view(
						queryset=Post.objects.all().order_by("-created"),
						template_name="resume.html")),
	url(r'^credit.html$', ListView.as_view(
						queryset=Post.objects.all().order_by("-created"),
						template_name="credit.html")),
	url(r'^contact.html$', 'contact'),
	url(r'^thanks.html$', 'feedback'),
	url(r'^tags/$', ListView.as_view(
							queryset=Post.tags.all().order_by("taggit_taggeditem_items"),
							template_name="tags.html")),
)

urlpatterns += patterns('',
    (r'^comments/', include('django.contrib.comments.urls')),
)