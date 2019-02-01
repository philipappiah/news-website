"""ElectoralCommission URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/2.1/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path
from voting.views import login,counter,totalballot,parlvotes,presvotes,count,dashboard,entryparliamentarian,entrypresidential,parliament_aspirants,president_aspirants
from django.conf.urls import url

urlpatterns = [
    path('admin/', admin.site.urls),
    url(r'^$', login, name='login'),
    url(r'dashboard', dashboard, name='dashboard'),
    url(r'presidential', president_aspirants.as_view(), name='presidential'),
    url(r'parliamentary', parliament_aspirants.as_view(), name='parliamentary'),
    url(r'entryone', entrypresidential, name='entryone'),
    url(r'entrytwo', entryparliamentarian, name='entrytwo'),
    url(r'^(?P<pk>[0-9]+)/$', presvotes.as_view(), name='presvotes'),
    url(r'^(?P<pk>[0-9]+)/parl$', parlvotes.as_view(), name='parlvotes'),
    url(r'count',count , name='count'),
    url(r'love',counter , name='love'),
    url(r'totalballot',totalballot , name='totalballot'),



]
