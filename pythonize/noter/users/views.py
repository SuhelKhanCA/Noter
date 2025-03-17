from django.shortcuts import render
from django.contrib.auth import authenticate, login
from django.http import HttpResponse
# Create your views here.

def login_view(request):
    if request.method == "POST":
        email = request.POST.get("email")
        password = request.POST.get("password")
        
        user = authenticate(request=request, email=email, password=password)
        
        if user is not None:
            login(request, user)
            return HttpResponse("Login Successful")
        else:
            return HttpResponse("Login Failed - Invalid credentials")
    else:        
        return render(request, "users/login.html")