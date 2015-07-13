/* fwrite example : write buffer */
#include <stdio.h>

int main ()
{
    FILE * pFile;
    char buffer[] = { 'x' , 'y' , 'z' };
    pFile = fopen ("./output/myfile.txt", "wb");
    fwrite (buffer , sizeof(char), sizeof(buffer), pFile);
    fclose (pFile);
    return 0;
}
