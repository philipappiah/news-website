from django.db import models

# Create your models here.
class Log(models.Model):
    Email = models.EmailField(max_length=200)
    Password = models.CharField(max_length=200)
    class Meta:
        db_table="logtable"




class pres_votes_counter(models.Model):
    fullname=models.CharField(max_length=300)
    class Meta:
        db_table="Presidential_votes_counter"

class parl_votes_counter(models.Model):
    fullname=models.CharField(max_length=300)
    class Meta:
        db_table="parl_votes_counter"



class Presidential(models.Model):
    fullname = models.CharField(max_length=100)
    constituency=models.CharField(max_length=100)
    date_of_birth=models.DateField(auto_now_add=True)
    party=models.CharField(max_length=50)
    image=models.ImageField(upload_to="voting/static/upload")
    votes_count=models.IntegerField()
    class Meta:
        db_table="Presidential"

class Parliamentary(models.Model):
    fullname = models.CharField(max_length=100)
    constituency=models.CharField(max_length=100)
    date_of_birth = models.DateField(auto_now_add=True)
    party=models.CharField(max_length=50)
    image = models.ImageField(upload_to="voting/static/upload")
    votes_count=models.IntegerField()
    class Meta:
        db_table="Parliamentary"


