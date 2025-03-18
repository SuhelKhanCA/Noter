from django.shortcuts import render
from django.contrib.auth import authenticate, login
# Create your views here.

def login_view(request):
    if request.method == "POST":
        email = request.POST.get("email")
        password = request.POST.get("password")
        
        user = authenticate(request=request, email=email, password=password)
        
        if user is not None:
            login(request, user)
            # Todo : Flash message
            # return HttpResponse("Login Successful")
            return render(request, "website/welcome.html")
        else:
            # Todo : Flash message
            # return HttpResponse("Login Failed - Invalid credentials")
            return render(request, "users/login.html")
    else:        
        return render(request, "users/login.html")