using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace lab1
{
    class Program
    {
       
        static void Main (string[] args)
    {
            int[] a = {  2, 3, 4, 5,6, 7, 8, 9 };
for (int i = 0; i <= a.Length; i++)
            {
                if (a[i] != i + 1)
                {
                    Console.WriteLine(i + 1);
                    break;
                }
            }
            Console.ReadKey();
        }
  }
}

