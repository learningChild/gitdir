#include <stdio.h>

int strindex(char source[], char searchfor[]);

int main(){

  char s[] = "helloworhelloldb1irde1";
  char t[] = "hello";

  int re = strindex(s,t);

  printf("%d\n", re);

}


/* strindex: return index of t in s, -1 if none */ 
int strindex(char s[], char t[])
{
  int i, j, k, x=-1;
  for (i = 0; s[i] != '\0'; i++) {
     for (j=i, k=0; t[k]!='\0' && s[j]==t[k]; j++, k++)
         ;
     if (k > 0 && t[k] == '\0')
        x = i; 
  }
  return x;
 }
