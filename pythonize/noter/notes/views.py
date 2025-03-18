from django.shortcuts import render
from django.contrib.auth.decorators import login_required
from django.http import HttpResponse
from .models import Note
# Create your views here.

@login_required(login_url="/users/login/")
def view_notes(request):
    
    notes = Note.objects.all()
    context = {
        "notes" : notes
    }
    return render(request, "notes/notes.html", context)

@login_required(login_url="/users/login/")
def add_note(request):
   
    # Todo: Add notes from recieved POST req to the DB
    return HttpResponse("Added!")