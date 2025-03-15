from django.db import models

# Create your models here.

class Note(models.Model):
    note_id = models.IntegerField(primary_key=True)
    title = models.CharField(max_length=20)
    Description = models.TextField()
    is_public = models.BooleanField()
    # username = models.CharField(max_length=10)
    date_created = models.DateField(auto_now_add=True)
    summary = models.TextField(null=True, blank=True)

    def __str__(self):
        return self.notename