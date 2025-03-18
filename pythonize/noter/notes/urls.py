from django.contrib import admin
from django.urls import path, include
from . import views
urlpatterns = [
    path('', views.view_notes, name='Notes'),
    path('', views.add_note, name='Add_Note'),
]