from django.shortcuts import render

# Create your views here.
from .loginform import Userlogin
from django.contrib import messages
import mysql.connector
import glob

from django.shortcuts import render_to_response
from django.http import Http404, HttpResponse, HttpResponseRedirect
from .models import pres_votes_counter,parl_votes_counter
from django.shortcuts import redirect
from .presidentialform import presidential
from .parliamentaryform import parliamentary
from .models import Parliamentary,Presidential
from django.views import generic


from django.contrib import messages

def login(request):
    if request.method == 'POST':
        loginform=Userlogin(request.POST)
        if loginform.is_valid():


            loginform.clean()




            loginform.save()
            name=loginform['Email'].value()
            password=loginform['Password'].value()







            mydb = mysql.connector.connect(
                host="localhost",
                user="root",
                password="",
                database="newreg")

            mycursor = mydb.cursor()

            sql = """SELECT * FROM users WHERE Email = '%s' AND Password = '%s'""" % (name, password)

            mycursor.execute(sql)
            result = mycursor.fetchall()

            count = mycursor.rowcount
            if count > 0:
                messages.success(request, 'You have successfully logged out')
                return render(request,"login.html")

            else:

                messages.warning(request,'You need proper credentials to access this page')
                return redirect('login')









        else:

            return HttpResponse('Failed to Log in, Please check email and password')


    else:
        loginform=Userlogin()



        return render(request, 'login.html', {'loginform':loginform})


def entrypresidential(request):
    if request.method=='POST':
        form=presidential(request.POST,request.FILES)
        if form.is_valid():
            title = request.POST.get('fullname', '')
            desc = request.POST.get('constituency', '')
        aspirants=Presidential(fullname=(request.POST.get('fullname','')),
                                   constituency=(request.POST.get('constituency','')),
                                   date_of_birth=(request.POST.get('date_of_birth')),
                                   party=(request.POST.get('party','')),
                                   image=(request.POST.get('image','')),
                                   votes_count=(request.POST.get('votes_count','')))
        aspirants.save()
        form=presidential()

        return render(request,'entrypresidential.html',{'form':form})
    else:
        form = presidential()
        return render(request, 'entrypresidential.html', {'form': form})


def entryparliamentarian(request):
    if request.method=='POST':
        form=parliamentary(request.POST,request.FILES)
        if form.is_valid():
            title = request.POST.get('fullname', '')
            desc = request.POST.get('constituency', '')
        aspirants=Parliamentary(fullname=(request.POST.get('fullname','')),
                                   constituency=(request.POST.get('constituency','')),
                                   date_of_birth=(request.POST.get('date_of_birth')),
                                    party=(request.POST.get('party','')),
                                   image=(request.POST.get('image','')),
                                   votes_count=(request.POST.get('votes_count','')))
        aspirants.save()
        form=parliamentary()

        return render(request,'entryparliamentarian.html',{'form':form})
    else:
        form = parliamentary()
        return render(request, 'entryparliamentarian.html', {'form': form})



class president_aspirants(generic.ListView):
    context_object_name = 'presidents'
    template_name = 'presidential.html'

    def get_queryset(self):
        return Presidential.objects.all()

class parliament_aspirants(generic.ListView):
    context_object_name = 'parliaments'
    template_name = 'parliamentary.html'

    def get_queryset(self):
        return Parliamentary.objects.all()


def dashboard(request):

    mylist=[{'pres':'Presidential','parl':'Parliamentary'}]

    return render(request, 'dashboard.html',{'mylist':mylist})

class presvotes(generic.DetailView):
    model = Presidential
    template_name = 'votescountpresidential.html'

class parlvotes(generic.DetailView):
    model = Parliamentary
    template_name = 'votecount_parliamentary.html'


def count(request):
    if request.method == 'POST':
        username = request.POST.get('username', None)

        pres_votes_counter.objects.create(fullname=username)

        return HttpResponse('')

def counter(request):
    if request.method == 'POST':
        username = request.POST.get('username', None)

        parl_votes_counter.objects.create(fullname=username)

        return HttpResponse('')


def totalballot(request):
    mydb = mysql.connector.connect(
        host="localhost",
        user="root",
        password="",
        database="polls")

    mycursor = mydb.cursor()

    sql = """SELECT * FROM presidential_votes_counter WHERE fullname = '%s' """ % ('Nana Addo Dankwah Akufo-Addo')


    mycursor.execute(sql)


    rows = mycursor.fetchall()
    s=mycursor.rowcount

    print('Total Row(s):', mycursor.rowcount)
    for row in rows:
        print(row)

    mydb1 = mysql.connector.connect(
        host="localhost",
        user="root",
        password="",
        database="polls")

    mycursor1 = mydb1.cursor()

    sql1 = """SELECT * FROM presidential_votes_counter WHERE fullname = '%s' """ % ('John Mahama')

    mycursor1.execute(sql1)

    rows1 = mycursor1.fetchall()
    s1 = mycursor1.rowcount

    mydb2 = mysql.connector.connect(
        host="localhost",
        user="root",
        password="",
        database="polls")

    mycursor2 = mydb2.cursor()

    sql2 = """SELECT * FROM parl_votes_counter WHERE fullname = '%s' """ % ('John Mahama')

    mycursor2.execute(sql2)

    rows2 = mycursor2.fetchall()
    s2 = mycursor2.rowcount



    return render(request,'totalballot.html',{'total':s,'total1':s1, 'totalpal':s2})

