from django.db import models
from taggit.managers import TaggableManager
from django import forms
from django.shortcuts import render
from django.http import HttpResponseRedirect

class Post(models.Model):
	title = models.CharField(max_length=100)
	body = models.TextField()
	created = models.DateTimeField(auto_now_add=True)
	tags = TaggableManager()
	
	def __unicode__(self):
		return self.title

class ContactForm(forms.Form):
    subject = forms.CharField(max_length=100)
    message = forms.CharField(widget=forms.Textarea(attrs={'class':'input-xxlarge','rows':'5'}))
    sender = forms.EmailField()
    cc_myself = forms.BooleanField(required=False)
	
class FeedbackForm(forms.Form):
    feedback_message = forms.CharField(widget=forms.Textarea(attrs={'rows':'5'}))
