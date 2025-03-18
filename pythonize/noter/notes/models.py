from django.db import models
from users.models import User
# Create your models here.

class Note(models.Model):
    note_id = models.AutoField(primary_key=True) 
    title = models.CharField(max_length=20)
    Description = models.TextField()
    is_public = models.BooleanField()
    date_created = models.DateField(auto_now_add=True)
    summary = models.TextField(null=True, blank=True)
    username = models.ForeignKey(User, on_delete=models.CASCADE)

    def __str__(self):
        return self.title
    
    class Meta:
        ordering = ["title"]