from blog.models import Post, ContactForm, FeedbackForm
from django.shortcuts import render_to_response, render
from django.http import HttpResponseRedirect, HttpResponse
from models import Post, ContactForm, FeedbackForm
import smtplib
from django.contrib import messages

def tagpage(request, tag):
	posts = Post.objects.filter(tags__name=tag)
	return render_to_response("tagpage.html", {"posts":posts, "tag":tag})


def posts(request, page=0, paginate_by=2):
    return list_detail.object_list(
        request,
        queryset=Post.objects.all(),
        paginate_by=paginate_by,
        page=page
    )
 

def contact(request):
	if request.method == 'POST': # If the form has been submitted...
		form = ContactForm(request.POST) # A form bound to the POST data
		if form.is_valid(): # All validation rules pass
			subject = form.cleaned_data['subject']
			message = form.cleaned_data['message']
			sender = form.cleaned_data['sender']	
			cc_myself = form.cleaned_data['cc_myself']
			recipients = ['heathercarmitchel@gmail.com']
			if cc_myself:
				recipients.append(sender)
			
			from django.core.mail import send_mail
			try:
				send_mail(subject, message, sender, recipients, fail_silently=False)
				messages.success(request, 'You have successfully sent me an email')
				messages.error(request, 'Something went wrong when sending your email')
			except smtplib.SMTPException:
				messages.error(request, 'Something went wrong when sending your email')
			return HttpResponseRedirect('/blog/contact.html')
	else:
		form = ContactForm() # An unbound form

	return render(request, 'contact.html', {
		'form': form,
	})
	
def feedback(request):
	if request.method == 'POST': # If the form has been submitted...
		form = FeedbackForm(request.POST) # A form bound to the POST data
		if form.is_valid(): # All validation rules pass
			subject = 'Feedback'
			message = form.cleaned_data['message']
			sender = 'hcarmitchel1@gmail.com'	
			recipients = ['heathercarmitchel@gmail.com']
			
			from django.core.mail import send_mail
			try:
				send_mail(subject, message, sender, recipients, fail_silently=False)
				messages.success(request, 'You have successfully sent me an email')
			except smtplib.SMTPException:
				messages.error(request, 'Something went wrong when sending your email')
			return HttpResponse.set_signed_cookie(feedback, value='true', salt='', max_age=None, expires=None, path='/', domain=None, secure=None, httponly=True)
	else:
		form = FeedbackForm() # An unbound form

	return render(request, 'thanks.html', {
		'form': form,
	})
