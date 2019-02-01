from django import forms
from voting.models import Log

class Userlogin(forms.ModelForm):
    Email = forms.EmailField(max_length=200)
    Password = forms.CharField(widget=forms.PasswordInput)

    Email.widget.attrs.update({'id': 'loginemail'})
    Password.widget.attrs.update({'id': 'loginpassword'})


    class Meta:

        model = Log
        fields = "__all__"